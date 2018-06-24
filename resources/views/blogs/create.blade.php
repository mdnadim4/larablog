@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron text-center p-5">
            <h1 class="display-5">Create New Blog</h1>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success mt-5 font-weight-bold" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <form action="{{ route('blogs.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="font-weight-bold">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Your title"/>
                    </div>
                    <div class="form-group">
                        <label for="body" class="font-weight-bold">Body</label>
                        <textarea name="body" class="form-control" placeholder="Enter Your Massage" id="" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-outline-success">Create Post</button>
                </form>
            </div>
        </div>
    </div>

@endsection