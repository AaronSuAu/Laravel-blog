@extends('main')

@section('title', '| Create New Post')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
        </div>
        <hr>
        <form method="POST" action="{{ route('posts.store') }}" data-parsley-validate>
            <div class="form-group">
                <label name="title">Title:</label>
                <input id="title" name="title" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label name="slug">Slug:</label>
                <input id="slug" name="slug" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label name="body">Post Body:</label>
                <textarea id="body" name="body" rows="10" class="form-control" required ></textarea>
            </div>
            <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/parsley.min.js') }}"></script>
@endsection
