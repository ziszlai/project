@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">
                        {{ $note->body }}
                        <div class="pull-right">
                            <a href="#">{{ $note->user->username }}</a> |
                            <a href="/notes/{{ $note->id }}/edit">Edit</a>
                        </div>
                    </li>
                @endforeach
            </ul>

            <hr>
            <h3>Add a new note</h3>
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{--{{ csrf_field() }}--}}
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add note</button>
                </div>
            </form>
        </div>
    </div>
@stop