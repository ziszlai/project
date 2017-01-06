@extends('layout')

@section('content')
    @include ('flash')
        @unless (empty($people))
            <ul>
                @foreach ($people as $person)
                    <li>{{ $person }}</li>
                @endforeach
            </ul>
        @endunless
@stop
