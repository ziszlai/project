<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {
//        $note = new Note;
//        $note->body = ;
//        $card->notes()->save($note);

//        $card->notes()->save(
//            new Note()
//        );

//        $card->notes()->create(['body' => $request->body]);

//        $card->notes()->create($request->all());
//        $note = new Note($request->all());

//        $note->user_id = 1;//Auth::id;
//        $note->by(Auth::user());

        $card->AddNote(
            new Note($request->all()),
            1
        );

        //return \Redirect::to('/');
        //return redirect('foo');
        return back();
    }

    public function edit(Note $note) {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note) {
        $note->update($request->all());
        return back();
    }
}
