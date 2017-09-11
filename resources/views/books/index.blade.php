@extends('app')
@section('title', 'Books')
@section('content')
<div class="row" id="books-form-container">
    @include('books.form')
    @include('books.search')
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <th class="text-center">
                        <a href="{{App\Helper\SortingHelper::getSortingLink('books.index', 'title')}}">
                            Title
                        </a>
                    </th>
                    <th class="text-center">
                        <a href="{{App\Helper\SortingHelper::getSortingLink('books.index', 'author')}}">
                            Author
                        </a>
                    </th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td class="text-center">
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