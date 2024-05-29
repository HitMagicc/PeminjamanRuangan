<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function index(){
        $gedung = Gedung::all();
        $gedungmatem = Gedung::where('nama_gedung','matem');
        return view('welcome', [
            'gedung'=>$gedung,
            'gedungmatem' =>$gedungmatem,
        ]);
    }

    public function create(){
        return view('create-gedung',[

        ]);
    }

    public function store(Request $request)
    {
        // $user = auth()->user();
        $request->validate([
            'nama_gedung' => 'required',
            'alamat' => 'required',
        ]);
        Gedung::create([
            'nama_gedung' => $request->nama_gedung,
            'alamat' => $request->alamat,
        ]);

        return to_route('user.index')->with('success', 'Gedung Successfuly Created');
    }

    public function edit($id) {
        // dd($id);
        $gedung = Gedung::where('id', $id)->first();
        return view('edit-gedung',[
            'gedung'=>$gedung
        ]);
    }

    public function update(Request $request, $id) {
        $gedung = Gedung::findOrFail($id);
        $gedung->update([
            'nama_gedung' => $request->nama_gedung,
            'alamat' => $request->alamat,
        ]);
        return to_route('user.index')->with('success', 'gedung Successfuly Edited');
    }

    public function delete($id){
        $gedung = Gedung::findOrFail($id);
        $gedung->delete();
        return to_route('user.index')->with('success', 'gedung Successfuly deleted');
    }
}