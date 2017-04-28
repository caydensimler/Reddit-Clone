<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Session;
use Log;

class PostsController extends Controller
{


    public function index()
    {
        $posts = Post::paginate(4);
        return view('posts.index')->with('posts', $posts);
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
        $request->session()->flush();

        $this->validate($request, Post::$rules);

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = 1;
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

        return view('posts.edit')->with('posts', $posts);
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
}
