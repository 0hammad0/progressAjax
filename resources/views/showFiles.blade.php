@extends('layouts.main')

@section('title')
    Show Files
@endsection

@section('content')
    <a href="{{ URL::previous() }}">Back</a>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="text-danger">
                            Files
                        </h1>
                    </div>
                    <div class="row">
                        @foreach ($files as $file)
                            <div class="col-md-3">
                                <div class="card-body">
                                    <div class="card mt-3" style="width: 120%">
                                        <video controls>
                                            <source src="{{ $file->file_path }}" type="video/mp4">
                                        </video>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $file->title }}</h5>
                                            <p class="card-text">
                                                {!! Illuminate\Support\Str::limit($file->description, 30) !!}</p>
                                            <a href="#" class="btn-sm btn-primary">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
