@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron p-5">
            <div class="container">
            <h1>{{ $blog->title }}
                <div class="flat-right pt-4">
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info">Edit</a>

                    <form class="d-inline-block" method="post" action="{{ route('blogs.delete', $blog->id) }}">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </h1>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <p>{{ $blog->body }}</p>
            </div>
        </div>
        </div>
    </div>

@endsection