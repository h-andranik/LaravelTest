@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/images/{{ $blog->image }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <input class="form-control" type="text" id="edittitle" value="{{ $blog->title }}" placeholder="{{ $blog->title }}">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <textarea class="form-control" type="text" id="edittext" placeholder="{{ $blog->text }}">{{ $blog->text }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">

                        </div>
                        <div class="col-md-7">
                            <button class="btn btn-success" data-id="{{ $blog->id }}" id="saveis">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
