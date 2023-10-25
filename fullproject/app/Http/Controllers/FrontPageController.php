<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontPageController extends Controller
{
    //
    public function index(){
        $product=DB::table('items')->get();/*get()  */
        return view('front_home',compact('product'));
    }

    public function about(){
        $data="About Us";
        return view('front_about',compact("data"));
    }
    public function service(){
        $data="Services";
        return view('front_service',compact("data"));
    }
    public function menu(){
        $product=DB::table('items')->get();
        $data="Food Menu";
        return view('front_menu',compact("data","product"));
    }
    public function booking(){
        $data="Booking";
        return view('front_booking',compact("data"));
    }
    public function team(){
        $data="Our Team";
        return view('front_team',compact("data"));
    }
    public function testimonial(){
        $data="Testimonial";
        return view('front_testimonial',compact("data"));
    }
    public function contact(){
        $data="Contact";
        return view('front_contact',compact("data"));
    }

}
