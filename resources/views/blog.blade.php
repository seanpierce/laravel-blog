@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card blog-post">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <img src="{{ asset('storage') . "/" . $post->image }}" alt="">
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
