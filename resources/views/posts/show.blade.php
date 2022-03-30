@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">
        <h1>{{ $post->title }}</h1>

        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}:
                    </strong>
                    <li class="list-group-item">
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Add a comment --}}
        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    @csrf
                    <div class="form-group">
                        <textarea name="body" placeholder="You comment here." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>

                @include('includes.errors')
            </div>
        </div>
    </div>

@endsection
