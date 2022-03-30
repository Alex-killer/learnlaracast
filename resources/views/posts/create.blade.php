@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">
        <h1>Create Post</h1>

        <hr>

        <form method="POST" action="/posts">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('includes.errors')
        </form>
    </div>

@endsection
