<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index() {
        $ruangan = Ruangan::all();
        return view('components.templates.admin.ruangan.index', [
            'ruangan'=>$ruangan
        ]);
    }
    public function show($id) {
        $ruangan = Ruangan::findOrFail($id);
        return view('components.templates.admin.ruangan.show', [
            'ruangan'=>$ruangan
        ]);
    }
    public function create() {
        $ruangan = Ruangan::all();
        $gedung = Gedung::all();
        // dd($gedung);
        return view('components.templates.admin.ruangan.create', [
            'ruangan'=>$ruangan,
            'gedung'=>$gedung
        ]);
    }
    
    public function store(Request $request){
        Ruangan::insert([
            'id_gedung'=>$request->nama_gedung,
            'nama_ruangan'=>$request->nama_ruangan,
            'jenis'=>$request->jenis_ruangan,
            'kapasitas'=>$request->kapasitas_ruangan
        ]); 
        return to_route('admin.ruangan.index')->with('success','Ruangan store successfully');
    }
    
    public function edit($id) {
        $gedung = Gedung::all();
        $ruangan = Ruangan::findOrFail($id);
        // dd($ruangan);
        return view('components.templates.admin.ruangan.edit', [
            'ruangan'=>$ruangan,
            'gedung'=>$gedung,
        ]);
    }

    public function update(Request $request, $id) {
        $ruangan = Ruangan::findOrFail($id);
        // dd($request);
        $ruangan->update([
            'id_gedung'=>$request->id_gedung,
            'nama_ruangan'=>$request->nama_ruangan,
            'jenis'=>$request->jenis_ruangan,
            'kapasitas'=>$request->kapasitas_ruangan,
        ]);
        return to_route('admin.ruangan.show',$id)->with([
            'success' => 'Ruangan updated successfully',
            'ruangan' => $ruangan
        ]);
    }

    public function delete($id){
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return to_route('admin.ruangan.index')->with('success' , 'ruangan deleted successfully');
    }
}
