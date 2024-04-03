<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    public function index()
    {
        $guitars = Guitar::all();
        return view('guitar', ['guitars' => $guitars]);
    }

    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'model' => 'required',
            'make' => 'required',
            'color' => 'required',
            'strings' => 'required',
            'price' => 'required'
        ]);

        Guitar::create($incomingFields);
        return redirect('/guitars');
    }

    public function edit(string $id) {
        $guitars = Guitar::all();
        $g = Guitar::find($id);
        return view('guitar', ['guitars' => $guitars, 'updateGuitar' => $g]);
    }

    public function update(Request $request, string $id)
    {
        $incomingFields = $request->validate([
            'model' => 'required',
            'make' => 'required',
            'color' => 'required',
            'strings' => 'required',
            'price' => 'required'
        ]);

        Guitar::where('id', $id)->update($incomingFields);
        return redirect('/guitars');
    }

    public function destroy(string $id)
    {
        Guitar::destroy($id);
        return redirect('/guitars');
    }
}
