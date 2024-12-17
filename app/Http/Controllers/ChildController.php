<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Child::all();

        return view('santa', compact('children'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $chil = Child::findOrFail($id);

        return view('santaShow', compact('child'));
    }
}
