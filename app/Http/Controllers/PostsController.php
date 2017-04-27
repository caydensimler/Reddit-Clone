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
        $posts = Models\Post::all() . PHP_EOL;

        $data = [];
        $posts = json_decode($posts, true);
        $data = ['posts' => $posts];

        return view('posts.index', $data);
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

        $this->validate($request, Post::$rules);

        $post = new Models\Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = 1;
        $post->save();

        return redirect()->action('PostsController@index');
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
        $posts = Models\Post::find($id) . PHP_EOL;

        $data = [];
        $posts = json_decode($posts, true);
        $data = ['posts' => $posts];
        
        return view('posts.show', $data);
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
        $posts = Models\Post::find($id) . PHP_EOL;

        $data = [];
        $posts = json_decode($posts, true);
        $data = ['posts' => $posts];

        return view('posts.edit', $data);
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

        return redirect()->action('PostsController@index');
    }
}
