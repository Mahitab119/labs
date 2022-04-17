@extends('layouts.app')

@section('title')View @endsection

@section('content')
<div class="card">
  <div class="card-header">
  Post Info
  </div>
  <div class="card-body">
    <h6 class="card-title">Title:</h6>{{$post['title']}}
  </div>
  <div class="card-body">
    <h6 class="card-title">Title:</h6>{{$post['description']}}
  </div>

</div>

<div class="card">
  <div class="card-header">
  Post Creator Info
  </div>
  <div class="card-body">
  <div class="card-body">
    <h6 class="card-title">Name:</h6>{{$post['post_creator']}}
  </div>
  <div class="card-body">
    <h6 class="card-title">Email:</h6>{{$post['email']}}
  </div>
  <div class="card-body">
    <h6 class="card-title">Created At:</h6>{{$post['created_at']}}
  </div>
  </div>
</div>


@endsection