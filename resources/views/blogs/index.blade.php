@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron text-center p-5">
            <h1>All Posts</h1>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success mt-5 font-weight-bold" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @foreach($blogs as $blog)
            <div class="card">
                <div class="card-body mt-3">
                    <h4>
                        <a href="{{ route('blogs.show', $blog->id) }}" >{{ $blog->title }}</a>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-info ml-3">Edit</a>
                        <form class="d-inline-block" method="post" action="{{ route('blogs.delete', $blog->id) }}">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </h4>
                </div>
            </div>
        @endforeach
    </div>

@endsection