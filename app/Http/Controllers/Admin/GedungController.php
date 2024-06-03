<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function index(){
        $gedung = Gedung::all();
        return view('components.templates.admin.gedung.index', [
            'gedung'=>$gedung
        ]);
    }
    public function create(){
        $maxGedungId = Gedung::max('id');
        $gedungId = $maxGedungId ? $maxGedungId + 1 : 1;
        return view('components.templates.admin.gedung.create', [
            'gedungId'=> $gedungId
        ]);
    }
    public function store(Request $request){
        
        Gedung::insert([
            'nama_gedung'=>$request->nama_gedung,
            'alamat'=>$request->alamat_gedung,
        ]); 
        return to_route('admin.gedung.index')->with('success','Status updated successfully');
    }

    public function edit($id){
        $gedung = Gedung::findOrFail($id);
        return view('components.templates.admin.gedung.edit', [
            'gedung'=> $gedung
        ]);
    }

    public function update(Request $request, $id){
        $gedung = Gedung::findOrFail($id);
        $gedung->update([
            'nama_gedung'=>$request->nama_gedung,
            'alamat'=>$request->alamat_gedung,
        ]);
        return to_route('admin.gedung.index')->with('success' , 'Gedung updated successfully');
    }

    public function delete( $id){
        $gedung = Gedung::findOrFail($id);
        $gedung->delete();
        return to_route('admin.gedung.index')->with('success' , 'Gedung deleted successfully');
    }
}
