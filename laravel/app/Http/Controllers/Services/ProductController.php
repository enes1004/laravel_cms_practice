<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;

class ProductController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function register_to_product(Request $request)
  {
    $already_registered=$request->user()->is_registered_to('product',['service_id'=>$request->service_id,'product_id'=>$request->product_id]);
    if(!$already_registered){
    $request->user()->register_product(['service_id'=>$request->service_id,'product_id'=>$request->product_id]);
    return view('products.'.mb_strtolower(Service::where('id',$request->service_id)->first()->name).'.register_done',['product_id'=>$request->product_id]);
  }
    else{
      return(view("services.register_done",['service_id'=>$request->service_id,'already_registered'=>false,'already_registered_product'=>$already_registered]));
    }
  }
}
