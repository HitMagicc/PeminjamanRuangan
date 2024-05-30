<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\Gedung;
use App\Models\Jurusan;
use App\Models\Permintaan;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(){
        return view('components.templates.user.request.index', []);
    }

    public function show($id){
        dd($id);
        $permintaan = Permintaan::where('id',$id)->first();
        return view('components.templates.user.request.show', [
            'permintaan' =>$permintaan
        ]);
    }
    public function create(){
        $gedung = Gedung::all();
        $ruangan = Ruangan::all();
        $jurusan = Jurusan::all();
        return view('components.templates.user.request.create', [
            'gedung'=>$gedung,
            'ruangan'=>$ruangan,
            'jurusan'=>$jurusan,
        ]);
    }

    public function store(Request $request) {
        // dd($request);
        $user = auth()->user();
        
        $berkas = Berkas::create([
            'nama'=>$request->nama,
            'npm'=>$request->npm,
            'no_telp'=>$request->nama,
        ]);
        Permintaan::create([
            'id_ruangan'=>$request->id_ruangan,
            'id_user'=>$user->id,
            'id_berkas'=>$berkas->id,
            'approval'=>null,
            'peruntukan'=>$request->peruntukkan,
            'tanggal'=>$request->tanggal,
        ]);
        return to_route('request.index')->with('success', 'Request created succesfully');
    }
}
