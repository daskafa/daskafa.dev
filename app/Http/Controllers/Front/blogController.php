<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Blogs;

class blogController extends Controller
{
    public function index(){
        $blog = Blogs::orderBy('created_at', 'DESC')->get();
        return view('front\blog', compact('blog'));
    }

    public function single($slug){
      $blogs = Blogs::where('slug', $slug)->first();
      $blogs->increment('hit');
      return view('front\single', compact('blogs'));
    }

} //
