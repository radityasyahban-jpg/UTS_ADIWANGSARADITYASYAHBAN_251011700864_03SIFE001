<?php

namespace App\Http\Controllers;

use App\Models\Shoe;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::all();

        return view('shoes.index', compact('shoes'));
    }

    public function show($id)
    {
        $shoe = Shoe::findOrFail($id);

        return view('shoes.show', compact('shoe'));
    }
}
