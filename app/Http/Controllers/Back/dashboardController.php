<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Blogs;

class dashboardController extends Controller
{
    public function index(){
      $blogs = Blogs::orderBy('created_at', 'DESC')->get();
      return view('back\dashboard', compact('blogs'));
    }

    public function createPost(Request $request){
      $blogs          = new Blogs();
      $blogs->title   = $request->title;
      $blogs->content = $request->content;
      $blogs->save();
      return redirect()->back();
    }

    public function deletePost(Request $request, $id){
      $blogs = Blogs::find($id);
      $blogs->delete();
      return redirect()->back();
    }
}
