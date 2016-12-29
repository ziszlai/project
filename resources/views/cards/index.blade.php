@extends('layout')

@section('content')


    All cards
    <ul>
    @foreach ($cards as $card)
        <li>
            <a href="{{ $card->path() }}">
                {{ $card->title }}
            </a>
        </li>
    @endforeach
    </ul>
@stop