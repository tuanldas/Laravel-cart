@extends('layout.base')

@section('conten')
    Cart
@endsection

@section('th')
    <th><span></span></th>
@endsection

@section('tbody')
    @foreach ($books as $key => $cart)
        @foreach($cart as $item)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $item['name_books'] }}</td>
            <td>{{ $item['auther'] }}</td>
            <td>{{ $item['price'] }}</td>
{{--            <td>{{ count($item['id_book']) }}</td>--}}
            <td><a href="{{ route('delete', $item['id_book']) }}"> <i class="material-icons">delete</i></a></td>
        </tr>
            @endforeach
    @endforeach
@endsection


@section('conten1')
    <a href="{{ route('index') }}"><i class="far fa-hand-point-left icon"></i></a>
@endsection