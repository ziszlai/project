@extends('layout')
<form action="/search-results" method="post">
    {{ csrf_field() }}
    <input type="text" id="search" name="search" value="abc">
    <button type="submit">Search</button>
</form>
@include('stats')

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
