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

        $card->AddNote(
            new Note($request->all())
        );

        //return \Redirect::to('/');
        //return redirect('foo');
        return back();
    }
}
