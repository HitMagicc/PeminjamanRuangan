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
        $user = auth()->user();
        $permintaan = Permintaan::with(['ruangan','user','berkas'])->where('id_user',$user->id)->get();
        // dd($permintaan);
        return view('components.templates.user.request.index', [
            'permintaan'=>$permintaan,
        ]);
    }

    public function show($id) {
        $permintaan = Permintaan::with(['ruangan.gedung', 'user', 'berkas'])->findOrFail($id);
        // dd($permintaan);
        return view('components.templates.user.request.show', [
            'permintaan' => $permintaan
        ]);
    }

    public function create(){
        $gedung = Gedung::all();
        $ruangan = Ruangan::all();
        $jurusan = Jurusan::all();
        // dd($gedung);
        return view('components.templates.user.request.create', [
            'gedung'=>$gedung,
            'ruangan'=>$ruangan,
            'jurusan'=>$jurusan,
        ]);
    }

    public function store(Request $request) {
        $user = auth()->user();
        // dd($request);
        $berkas = Berkas::create([
            'id_jurusan'=>$request->jurusan,
            'nama'=>$request->nama,
            'npm'=>$request->npm,
            'no_telp'=>$request->no_telp,
        ]);
        Permintaan::create([
            'id_ruangan'=>$request->ruangan,
            'id_user'=>$user->id,
            'id_berkas'=>$berkas->id,
            'approval'=>0,
            'peruntukan'=>$request->peruntukan,
            'tanggal'=>$request->tanggal,
        ]);
        return to_route('request.index')->with('success', 'Request created succesfully');
    }
}
