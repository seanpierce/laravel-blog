@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    @foreach ($posts as $post)
                        <div class="card post">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $post->title }}
                                </h5>
                                <div class="card-text">
                                    {{ $post->content }}
                                    <div class="text-muted created-at">
                                        <em>Created at {{ $post->created_at }}</em>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-body">
                    <a class="btn btn-secondary" href="/admin" role="button">Back</a>
                    <a class="btn btn-primary" href="/admin/new-post" role="button">New Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection