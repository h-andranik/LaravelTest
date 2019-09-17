@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="body-title">Blogs</h1>
                    </div>
                </div>
                @foreach($blogs as $blog)
                    <div>
                        <div class="row blog">
                            <div class="col-md-4">
                                <img src="/images/{{ $blog->image }}">
                            </div>
                            <div class="col-md-6">
                                <a href="/blogs/{{ $blog->id }}"><h2>{{ $blog->title }}</h2></a>
                                <p>{{ $blog->text }}</p>
                            </div>
                            <div class="col-md-2">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                       id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        ...
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="/edit/{{ $blog->id }}"
                                           id="delete">Edit</a>
                                        <a class="dropdown-item delete" data-id="{{ $blog->id }}">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
