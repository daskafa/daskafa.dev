<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//SEOTools
  use Artesaos\SEOTools\Facades\SEOMeta;
  use Artesaos\SEOTools\Facades\OpenGraph;
  use Artesaos\SEOTools\Facades\TwitterCard;
  use Artesaos\SEOTools\Facades\JsonLd;
  use Artesaos\SEOTools\Facades\JsonLdMulti;
  use Artesaos\SEOTools\Facades\SEOTools;
//SEOTools

// Models
use App\Blogs;

class blogController extends Controller
{
    public function index(){
        $blog = Blogs::orderBy('created_at', 'DESC')->get();
        return view('front.blog', compact('blog'));
    }

    public function single($slug){
      $blogs = Blogs::where('slug', $slug)->first();
      $blogs->increment('hit');

      SEOMeta::setTitle($blogs->title);
      SEOMeta::setDescription($blogs->content);
      SEOMeta::addMeta('article:published_time', $blogs->created_at);
      SEOMeta::addKeyword(['yilmaz', 'daskafa', 'yilmaz daskafa']);
      OpenGraph::setDescription($blogs->content);
      OpenGraph::setTitle($blogs->title);
      OpenGraph::setUrl('http://daskafa.com');
      OpenGraph::addProperty('type', 'article');
      OpenGraph::addProperty('locale', 'tr-TR');
      OpenGraph::addProperty('locale:alternate', ['en-us']);
      JsonLd::setTitle($blogs->title);
      JsonLd::setDescription($blogs->content);
      JsonLd::setType('Blog');
      JsonLdMulti::setTitle($blogs->title);
      JsonLdMulti::setDescription($blogs->content);
      JsonLdMulti::setType('Blog');
      if(! JsonLdMulti::isEmpty()) {
          JsonLdMulti::newJsonLd();
          JsonLdMulti::setType('WebPage');
          JsonLdMulti::setTitle('Page Article - '.$blogs->title);
      }

      return view('front.single', compact('blogs'));
    }

} //




























//
