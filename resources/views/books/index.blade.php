@extends('app')
@section('title', 'Books')
@section('content')
<div class="col-md-12">
    <table class="table table-bordered table-hover table-responsive">
        <thead>
            <tr>
                <th>Title</th>
                <th>Authors</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->formatAuthors() }}</td>
                <td><button class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop