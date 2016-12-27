<?php
namespace App\Http\Controllers;
use App\Post;

// static page controller
class PageController extends Controller {
	// home
	public function getHome() {
		return view('pages.home');
	}
	// blog
	public function getBlog() {
		// get latest 5 posts and store in var
		$posts = Post::orderBy('id', 'desc')->limit(4)->get();
		return view('pages.blog')->withPosts($posts);
	}
	// about page
	public function getAbout() {
		return view('pages.about');
	}
	// portfolio page
	public function getPortfolio() {
		return view('pages.portfolio');
	}
	// contact page
	public function getContact() {
		return view('pages.contact');
	}
	// contact page post
	public function postContact() {
	}
	// support page
	public function getSupport() {
		return view('pages.support');
	}
}
