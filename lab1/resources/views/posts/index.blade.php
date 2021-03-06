@extends('layouts.app')

@section('title')Index @endsection

@section('content')
<div class="text-center">
  <a href="{{ route('posts.create') }}" class="mt-4 btn btn-success">Create Post</a>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Posted By</th>
      <th scope="col">Photo</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $posts as $post)

    <tr>
      <td>{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{$post->slug}}</td>
      <td>{{ $post->user->name }}</td>
      <td><img src="{{$post->featrued}}" class="img-thumbnail" width="100px" height="100px"></td>
      <td>{{\Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}</td>
      <td>
        <a href="{{ route('posts.show', ['post' => $post['id']]) }}" class="btn btn-info">View</a>
        <a href="{{ route('posts.edit' , ['post' => $post['id']]) }}" class="btn btn-primary">Edit</a>
        <a href="{{route('posts.delete', ['post' => $post['id']])}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

<div class="d-flex justify-content-center">
  {{$posts->links()}}
</div>

@endsection