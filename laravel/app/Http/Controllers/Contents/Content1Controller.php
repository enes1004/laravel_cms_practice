<?php

namespace App\Http\Controllers\Contents;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content1;

class Content1Controller extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      #add custom middleware for service here;
    }
    public function index($content_id){
      return view('contents.content1.content_view',['content'=>Content1::where('id',$content_id)->first()]);
    }
}
