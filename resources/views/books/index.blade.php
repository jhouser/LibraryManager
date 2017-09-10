@extends('app')
@section('title', 'Books')
@section('content')
<div class="row">
    @include('books.form')
    @include('books.search')
</div>
<hr>
<div class="row">
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
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->formatAuthors() }}</td>
                    <td>
                        <form action="{{url('books', $book)}}" method="POSt">
                            {{ method_field('DELETE') }}
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    </div>
</div>
@stop