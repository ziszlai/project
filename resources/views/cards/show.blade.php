@extends('layout')

@section('content')


    {{ $card->title }}

    @foreach($card->notes as $node)
        <li>{{ $node->body }}</li>
    @endforeach
@stop