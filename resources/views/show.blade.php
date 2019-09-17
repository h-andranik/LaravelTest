@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="body-title">{{ $blog->title }}</h1>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/images/{{ $blog->image }}">
                        </div>
                        <div class="col-md-6">
                            <p id="{{ $blog->id }}">{{ $blog->text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
