<?php

namespace App\Http\Controllers;

use App\Organ;
use Illuminate\Http\Request;

class OrgansController extends Controller
{
    public function index()
    {
        //Done using eloquent (ARP)
        $organs = Organ::all();
        return view('organs.index', compact('organs'));
    }

    public function show(Organ $organ)
    {
        
        // $organ = Organ::find($id);

        // include the notes and user
        $organ->load('notes.user');

        // using route-model-binding
        return view('organs.show', compact('organ'));
    }
}
