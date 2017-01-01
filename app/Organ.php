<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function path()
    {
        return '/organs/' . $this->id;
    }

    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }
}
