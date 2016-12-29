@extends('layout')

@section('content')
        @unless (empty($people))
            <ul>
                @foreach ($people as $person)
                    <li>{{ $person }}</li>
                @endforeach
            </ul>
        @endunless
@stop
