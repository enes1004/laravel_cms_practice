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
    if(!$request->user()->is_registered_to('service',$request->id)){
    $request->user()->register_service($request->id);
    return view('services.register_done',['service_id'=>$request->id]);
  }
    else{
      return(redirect("/services/".$request->id."/register"));
    }
  }
}
