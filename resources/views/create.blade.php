@extends('layouts.main')

@section('title')
    Show Files
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="text-danger">
                            Larvel 9 ajax File upload with progress bar
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" placeholder="title...">

                                <label class="pt-2" for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5"
                                    placeholder="write your message"></textarea>

                                <input type="file" name="file" class="form-control mt-3 mb-3 dropzone"
                                    id="file-upload">

                                <div class="progress mb-3">
                                    <div class="bar"></div>
                                    <div class="percent">0%</div>
                                </div>

                                <input type="submit" value="submit" class="btn btn-primary col-md-3">
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card mt-3">
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('view.file') }}"><input type="button" class="btn btn-outline-primary"
                                    value="View files"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
