@extends('layouts.app')

@section('title')Edit @endsection

@section('content')
        <form method="post" action="{{ route('posts.update',['post' => $post['id']])}}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""  value="{{$post['title']}}">

            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$post['description']}}"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select class="form-control">
                    <option value="1">Ahmed</option>
                    <option value="2">Mohamed</option>
                    <option value="2">Ali</option>

                </select>
            </div>

          <button class="btn btn-success">Update</button>
        </form>
@endsection
    