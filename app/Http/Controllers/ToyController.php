<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toys = Toy::all();

        return view('elf', compact('toys'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $toy = Toy::findOrFail($id);

        return view('elfShow', compact('toy'));
    }
}
