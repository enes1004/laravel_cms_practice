@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    This is {{ Service::where('id',$service_id)->first()->name }}
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/services/'.$service_id.'/register_done') }}">
                    <input type="hidden" name="id" value={{$service_id}} />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
