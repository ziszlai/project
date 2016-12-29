@extends('layout')

@section('content')


    All cards
    <ul>
    @foreach ($cards as $card)
        <li>{{ $card->title }}</li>
    @endforeach
    </ul>
@stop