@extends('app')
@section('title', 'Books')
@section('content')
<table>
    <tr>
        <th>Title</th>
        <th>Authors</th>
    </tr>
    @foreach ($books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->formatAuthors() }}</td>
        </tr>
    @endforeach
</table>
@stop