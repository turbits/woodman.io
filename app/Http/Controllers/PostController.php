<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // store all blog posts in db in a variable
      $posts = Post::orderBy('id', 'desc')->paginate(10);

      // return a view (index) and pass in posts var
      return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // posts
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate
      $this->validate($request, [
        'title' => 'required|max:255',
        'slug' => 'required|alpha_dash|min:5|max:255',
        'body' => 'required'
        ]);

      // store
      $post = new Post;
      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->body = $request->body;

      $post->save();

      Session::flash('success', 'Blog post GET!');

      // redirect
      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // store post in var
      $post = Post::find($id);

      // return view and pass in post var
      return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // store post in var
      $post = Post::find($id);

      // return view and pass in post var
      return view('posts.edit')->with('post', $post);
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
      // validate data
      $this->validate($request, [
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255',
          'body' => 'required'
        ]);

      // grab post from DB
      $post = Post::find($id);

      // save to DB
      $post->title = $request->input('title');
      $post->slug = $request->input('slug');
      $post->body = $request->input('body');
      $post->save(); // will automagically update timestamp

      // set flash data with success msg
      Session::flash('success', 'post successfully updated!');

      // redirect to post
      return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  }
