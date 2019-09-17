@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Your Blog</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" id="title"
                                       autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Text') }}</label>

                            <div class="col-md-6">
                                <textarea id="text" type="text" class="form-control" id="text"
                                          autofocus>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="image" value="Add-img" multiple>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create"
                                   class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button id="add" class="btn btn-secondary">Create</button>
                            </div>
                        </div>
                        <input value="{{ Auth::user()->id }}" id="userid" hidden>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
