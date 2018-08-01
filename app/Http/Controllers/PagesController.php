<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Country;
use App\Race;
use App\Category;
use App\Experience;

class PagesController extends Controller {

  public function aboutUs()
    {
    	return view('frontend.aboutUs');

    }
    public function acting()
    {
    	return view('frontend.acting');

    }
     public function contactUs()
    {
    	return view('frontend.contactUs');
    }
     public function dance()
    {
    	return view('frontend.dance');
    }
     public function film()
    {
    	return view('frontend.film');
    }
     public function footer()
    {
    	return view('frontend.footer');
    }
     public function Home()
    {
    	return view('frontend.Home');
    }
     public function joinNow()
    {
        $categories=Category::all();
        $experience=Experience::all();
      $races=Race::all();
      $countries = Country::all();
    	return view('frontend.joinNow', ['countries' => $countries,'races'=>$races,'categories'=>$categories,'experience'=>$experience]);



    }
     public function modeling()
    {
    	return view('frontend.modeling');

    }
     public function music()
    {
    	return view('frontend.music');
    }
     public function navBar()
    {
    	return view('frontend.navBar');
    }
     public function photography()
    {
    	return view('frontend.photography');
    }
     public function sports()
    {
    	return view('frontend.sports');
    }
     public function terms()
    {
    	return view('frontend.terms');
    }
     public function topVideo()
    {
    	return view('frontend.topVideo');
    }




  public function create_post(Request $request) {

    $user_id = Auth::id();
    $media_caption = $request->file('media_caption');
    $media = $request->file('media')->store('users/avatars');

    $post = new Post([
      'media_caption' => $media_caption,
      'media' => $media,
      'user_id' => $user_id
    ]);
    $post->save();
    return redirect()->back();
  }

  public function wall() {
    $posts = Post::all();
    return view('wall', ['posts'=>$posts]);
  }


}
