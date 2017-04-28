<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // show all the posts
        $posts = Models\Post::paginate(4);
        return view('posts.index')->with('posts', $posts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show the form to create a post

        $data = [];
        $posts['title'] = '';
        $posts['content'] = '';
        $posts['url'] = '';
        $data = ['posts' => $posts];

        return view('posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save the new post
        $request->session()->flush();

        $this->validate($request, Post::$rules);

        $post = new Models\Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = 1;
        $post->save();

        \Session::flash('successMessage', 'Post saved successfully!');


        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show a specific post based on the id
        $posts = Models\Post::find($id);


        if (!$posts) {
            \Session::flash('errorMessage', 'Post not found.');
            return redirect()->action('PostsController@index');
        }
        
        return view('posts.show')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Show the form for editing the specified resource.
        $posts = Models\Post::find($id);

        return view('posts.edit')->with('posts', $posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, Post::$rules);

        // Update the post in the database
        $post = \App\Models\Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->save();

        if ($post) {
            \Session::flash('updateMessage', 'Post successfully updated.');
            return redirect()->action('PostsController@show', $post->id);
        }


        return PostsController::show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete a post based on the id
        $post = Models\Post::find($id);
        $post->delete();

        \Session::flash('deleteMessage', 'Post successfully deleted.');

        return redirect()->action('PostsController@index');
    }
}
