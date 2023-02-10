@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Blogs</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Blog #</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Blog</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->blog }}</td>
                        <td>
                            <a href="/comments/create">Comment</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
