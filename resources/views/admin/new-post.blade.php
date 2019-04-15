@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Post</div>
                <div class="card-body">
                    <create-post />
                </div>
                <div class="card-body">
                    <a class="btn btn-secondary" href="/admin" role="button">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection