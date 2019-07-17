@extends('layouts.app')

@section('content')

@foreach ($content->categories()->get() as $category)
<h6>{{$category->description}}</h4>
@endforeach
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$content->title}}</div>
                <h7>{{$content->writer}}</h7>
                <h8>{{$content->created_at}}</h8>
                <div class="panel-body">
                    {{$content->content}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
