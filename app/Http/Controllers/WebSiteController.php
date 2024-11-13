<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    //

    // View Websites Only Start
    public function home(){
        return view('Fashion_WebSite.home');
    }
    public function about(){
        return view('Fashion_WebSite.about');
    }
    public function contact(){
        return view('Fashion_WebSite.contact');
    }
    public function mens(){
        return view('Fashion_WebSite.men');
    }
    public function womens(){
        return view('Fashion_WebSite.women');
    }
    public function kids(){
        return view('Fashion_WebSite.kids');
    }
    // View Websites Only End

}
