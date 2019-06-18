@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if($already_registered) Already Registered @else Registered to @endif {{ Service::where('id',$service_id)->first()->name }}
                    <br>
                    Now, register for products
                    <br>
                      @if($already_registered_product)<br> Already Registered to product<br> @endif

                    @foreach (Service::where('id',$service_id)->first()->products()->get() as $product)
                    <span>{{$product->description}} : </span>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/products/'.$service_id.'/'.$product->id.'/register_done') }}">
                    <input type="hidden" name="service_id" value="{{ $service_id }}" />
                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">Register</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
