<?php

namespace App\Http\Controllers;

use App\Note;
use App\Organ;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Organ $organ)
    {
        // validation
        $this->validate($request, [
            'body' => 'required|unique:notes,body'
        ]);

        // longhand way

            // $note = new Note;

            // $note->body = $request->body;

            // $organ->notes()->save($note);

        // alternative way

            // $note = new Note(['body' => $request->body]);

            // $organ->notes()->save($note);

        // a further simpler way

            // $organ->notes()->save(
            //     new Note(['body' => $request->body])
            // );

        // using create method

            // $organ->notes()->create([
            //     'body' => $request->body
            // ]);

        // using $request->all()

            // $organ->notes()->create($request->all());

        // using a method on the Organ model

        $note = new Note($request->all());

        // alternative to the below
        // $note->user_id = 1;

        $organ->addNote($note, 1);        

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        // dd($note);
        $note->update($request->all());

        return redirect('/organs/' . $note->organ_id);
    }
}
