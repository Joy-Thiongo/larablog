@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Comments</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Comment #</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
