<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Session;
use Log;
use App\User;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function users() 
    {
        if (\Auth::user()->email === 'admin@admin.com') {
            $users = User::orderBy('updated_at', 'desc')->paginate(10);
            return view('posts.users')->with('users', $users);
        } else {
            Session::flash('accessDenied', 'Access denied.');
            return redirect()->action('PostsController@index');
        }
    }

    public function usersPosts($id)
    {
        $posts = Post::where('created_by', "$id")
        ->orderBy('updated_at', 'desc')
        ->paginate(4);

        return view('posts.users_posts')->with('posts', $posts);
    }

    public function index(Request $request)
    {

        if (isset($request->search) && $request->searchByPost === 'post' && !$request->has('searchByUser')) {

            $posts = Post::where('title', 'like', "%$request->search%")
            ->paginate(4);

            $posts->appends($request->all());

            $showHeader = false;
            return view('posts.index')->with('posts', $posts)->with('showHeader', $showHeader);

        } else if (isset($request->search) && $request->searchByUser === 'user' && !$request->has('searchByPost')) {

            $posts = Post::join('users', 'created_by', '=', 'users.id')
            ->where('name', 'like', "%$request->search%")
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);

            $posts->appends($request->all());

            $showHeader = false;
            return view('posts.index')->with('posts', $posts)->with('showHeader', $showHeader);

        } else if (isset($request->search) && isset($request->searchByUser) && isset($request->searchByPost)) {

            $posts = Post::join('users', 'created_by', '=', 'users.id')
            ->where('name', 'like', "%$request->search%")
            ->orWhere('title', 'like', "%$request->search%")
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);

            $posts->appends($request->all());

            $showHeader = false;
            return view('posts.index')->with('posts', $posts)->with('showHeader', $showHeader);

        }

        $posts = Post::orderBy('updated_at', 'desc')->paginate(4);
        $showHeader = false;

        if ((!$request->has('page') || $request->page === 1) && (!$request->has('search') || $request->search == '')) {
            $showHeader = true;
        }

        return view('posts.index')->with('posts', $posts)->with('showHeader', $showHeader);
    }


    public function create()
    {

        $data = [];
        $posts['title'] = '';
        $posts['content'] = '';
        $posts['url'] = '';
        $data = ['posts' => $posts];

        return view('posts.create', $data);
    }


    public function store(Request $request)
    {
        $this->validate($request, Post::$rules);

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = \Auth::user()->id;
        Log::info("Post Created \n \tTitle: {$post->title} \n \tContent: {$post->content} \n \tURL: {$post->url} \n \tCreated By: {$post->created_by}");
        $post->save();

        Session::flash('successMessage', 'Post saved successfully!');


        return redirect()->action('PostsController@show', $post->id);
    }


    public function show($id)
    {
        $posts = Post::find($id);


        if (!$posts) {
            Log::error("Post with id of $id cannot be found.");
            abort(404);
        }
        
        return view('posts.show')->with('posts', $posts);
    }


    public function edit($id)
    {


        $posts = Post::find($id);

        if (!$posts) {
            Log::error("Post with id of $id cannot be found.");
            abort(404);
        }

        // dd(\Auth::user()->id != $posts->created_by, \Auth::user()->email != 'admin@admin.com', \Auth::user()->id === $posts->created_by);

        if (\Auth::user()->id != $posts->created_by && \Auth::user()->email != 'admin@admin.com') {
            Session::flash('notOwner', 'Access Denied');
            return redirect()->action('PostsController@index');
        } else if (\Auth::user()->id === $posts->created_by || \Auth::user()->email === 'admin@admin.com') {
            return view('posts.edit')->with('posts', $posts);
        }


    }


    public function update(Request $request, $id)
    {

        $this->validate($request, Post::$rules);


        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->save();

        if ($post) {
            Session::flash('updateMessage', 'Post successfully updated.');
            return redirect()->action('PostsController@show', $post->id);
        }


        return PostsController::show($id);
    }


    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            Log::info("Post with id of $id cannot be found.");
            abort(404);
        }

        Log::info("Post Deleted \n \tTitle: {$post->title} \n \tContent: {$post->content} \n \tURL: {$post->url} \n \tCreated By: {$post->created_by}");

        $post->delete();

        Session::flash('deleteMessage', 'Post successfully deleted.');

        return redirect()->action('PostsController@index');
    }

    public function destroyUser($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('deleteUser', 'User deleted successfully');
        return redirect()->action('PostsController@users');
    }

    public function account() {
        // $user = User::find(\Auth::user()->id);

        $posts = Post::where('created_by', \Auth::user()->id)->paginate(4);
        // $posts = $user->posts;
        return view('posts.account')->with('posts', $posts);
    }
}
