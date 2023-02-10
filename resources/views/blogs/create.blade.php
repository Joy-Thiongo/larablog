@extends('layouts.app')
@section('content')
    <form action="/blogs" method="post">
        @csrf
        <div class="row ">
            <div class="col-md-8 bg-white shadow-sm mx-auto py-3">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label ">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label ">Description</label>
                        <input type="text" name="description" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="" class="form-label ">Blogs</label>
                        <textarea name="blog" id="" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-12"></div>
                    <div class="col-md-6 mx-auto text-center">
                        <button class="submit btn btn-sm btn-success py-2 px-3">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
