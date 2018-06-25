@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron text-center p-5">
            <h1>Trashed Posts</h1>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success mt-5 font-weight-bold" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @foreach($trashed as $blog)
            <div class="card">
                <div class="card-body mt-3">
                    <h4>
                        <a href="{{ route('blogs.show', $blog->id) }}" >{{ $blog->title }}</a>
                        <form action="{{ route('blogs.restore', $blog->id) }}" method="get" class="d-inline-block">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-sm btn-success">Restore</button>
                        </form>
                        <form action="{{ route('blogs.permanent-delete', $blog->id) }}" method="post" class="d-inline-block">
                            {{ csrf_field() }}
                            {{ method_field("delete") }}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </h4>
                </div>
            </div>
        @endforeach
    </div>

@endsection