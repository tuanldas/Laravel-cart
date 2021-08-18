@extends('layout.base')

@section('conten')
    Shop
@endsection

@section('th')
    <th><span></span></th>
@endsection

@section('conten1')
    <a href="{{ route('cart') }}"><i class="fas fa-shopping-cart icon"></i></a>

@endsection

@section('tbody')
    @foreach($books as $key => $book)
        <tr>
            <td>{{ ++$key }}</td>
            <td class="lalign">{{ $book->name_books}}</td>
            <td>{{ $book->auther}}</td>
            <td>{{ $book->price}}</td>
            <td><a href="{{ route('addNewCart', $book -> id_book) }}"> <i class="material-icons">add</i></a></td>
        </tr>
    @endforeach
@endsection