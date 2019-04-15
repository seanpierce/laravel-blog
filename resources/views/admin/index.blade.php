@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome Admin!</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="/admin/posts" class="list-group-item list-group-item-action">
                            Posts
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Lorem Ipsum
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Some New Link
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection