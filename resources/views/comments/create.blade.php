@extends('layouts.app')
@section('content')
    <form action="/comments" method="post">
        @csrf
        <div class="row">
            <a href="/comments" class="comment btn btn-sm btn-danger py-2 px-3 col-md-2 mx-4 mb-3">Comments</a>
        </div>
        <div class="row">
            <div class="col-md-8 bg-white shadow-sm mx-auto py-3">
                <div class="row">
                    <div class="mb-3 col-md-12 mx-auto">
                        <label for="" class="form-label">Comment</label>
                        <textarea name="comment" id="" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-6 mx-auto text-center">
                        <button class="submit btn btn-sm btn-success py-2 px-3">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
