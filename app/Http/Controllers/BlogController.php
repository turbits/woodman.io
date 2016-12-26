<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{

  public function getIndex() {
    $posts = Post::paginate(10);
    return view('blog.index')->withPosts($posts);
  }

  public function getSinglePost($slug) {
    // get post from DB based on slug
    $post = Post::where('slug', '=', $slug)->first();

    return view('blog.post')->withPost($post);
  }
}
