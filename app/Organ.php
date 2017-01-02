<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
    protected $fillable = ['name'];
    
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function path()
    {
        return '/organs/' . $this->id;
    }

    public function addNote(Note $note, $userId)
    {
        $note->user_id = $userId;

        return $this->notes()->save($note);
    }
}
