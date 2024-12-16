<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Children;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Children::all();

        return view('santa', compact('children'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chil = Children::findOrFail($id);

        return view('santaShow', compact('child'));
    }
}
