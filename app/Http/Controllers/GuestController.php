<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $entries =Entry::with('user')//Se agrega el with a la relacion para que cargue mas rapido
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->paginate(10);
        return view('welcome', compact('entries'));
    }

    public function show(Entry $entry)
    {
        return view ('entries.show',compact('entry'));
    }
}
