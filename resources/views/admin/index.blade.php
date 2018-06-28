@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron text-center p-5">
            <h1>Admin Dashboard</h1>
        </div>

        <div class="col-md-12 mt-5 ml-5">
            <button class="btn btn-lg btn-warning mr-2">
                <a href="{{route('blogs.create')}}" class="text-dark">Create Post</a>
            </button>
            <button class="btn btn-lg btn-danger">
                <a href="{{route('blogs.trash')}}" class="text-dark">Trash Post</a>
            </button>
        </div>

    </div>

@endsection