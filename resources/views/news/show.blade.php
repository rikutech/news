@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-10">
      <h1>{{$news->title}}</h1>
      <p>{{$news->body}}</p>
    </div>
    <div class="col-xs-2">
    </div>
  </div>
</div>
@endsection