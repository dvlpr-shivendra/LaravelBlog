@extends('layouts.master')

@section('content')

<div class="col-md-8 offset-md-2">
    <h3 class="text-center">{!! $post->title!!}</h3>
    <p><img class="img-thumbnail" src="/images/{{$post->image}}" ></p>
    <p><strong>A post by {{ $post->user->name }}</strong> on <strong>{{$post->created_at->toFormattedDateString()}}</strong></p>
    {!! $post->body !!}
<hr>
@if (Auth::check())
    @if ($post->user_id == Auth::user()->id)
    <div id="del-edit-panel">
            <a href="/edit/{{$post->id}}" class="btn btn-primary" id="edit-button">Edit</a>
            
            <form action="/delete" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $post->id}}">

                <button type="submit" class="btn btn-danger " id="del-button">Delete</button>
            </form>
        </div>
@endif
@endif
    <hr>
    <h4 class="mb-3">Comments :</h4>
    <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item"><strong> {!! $comment->name !!} :</strong> {!! $comment->body !!} </li>
        @endforeach
    </ul>
    <br>
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">Add comment :</h4>
        <form action="/comment" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $post->id }}">
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Your name">
            </div>

            <div class="form-group">
              <textarea class="form-control" name="body" id="" rows="3" placeholder="Write your comment"></textarea>
            </div> 

            <button type="submit" class="btn btn-success">comment</button>

        </form>
      </div>
    </div>
    <br>
</div>
@endsection