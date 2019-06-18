<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index($service_id)
  {
    return view('services.register',['service_id'=>$service_id]);
  }
  public function register_to_service(Request $request)
  {
    $already_registered=$request->user()->is_registered_to('service',['service_id'=>$request->id]);
    if(!$already_registered){
    $request->user()->register_service($request->id);
  }
    return view('services.register_done',['service_id'=>$request->id, 'already_registered'=>$already_registered]);
  }
}
