<?php
namespace App\Http\Controllers;

// static page controller
class PageController extends Controller {
	// homepage
	public function getIndex() {
		return view('pages/home');
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