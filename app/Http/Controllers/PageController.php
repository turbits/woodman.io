<?php
namespace App\Http\Controllers;
use App\Post;

// static page controller
class PageController extends Controller {
	// homepage
	public function getIndex() {
		// get latest 5 posts and store in var
		$posts = Post::orderBy('id', 'desc')->limit(4)->get();
		return view('pages/home')->withPosts($posts);
	}
	// about page
	public function getAbout() {
		$first = 'Trevor';
		$last = 'Woodman';

		$fullname = $first.' '.$last;
		// can pass in multiple vars/arrays
		return view('pages/about')->withFullname($fullname);
	}
	// contact page
	public function getContact() {
		return view('pages/contact');
	}
	// contact page post
	public function postContact() {
	}
}