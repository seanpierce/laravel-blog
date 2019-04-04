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
            </div>
        </div>
    </div>
</div>
@endsection