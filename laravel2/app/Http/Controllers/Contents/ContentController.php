<?php

namespace App\Http\Controllers\Contents;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content;

class ContentController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      #add custom middleware for service here;
    }
    public function index($content_id){
      return view('contents.content.content_view',['content'=>Content::where('id',$content_id)->first()]);
    }
}
