<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index(){
        $user=auth()->user();
        $history =  Permintaan::where('approval','!=',0)->where('id_user',$user->id)->get();
        return view('components.templates.user.riwayat.index', [
            'history'=>$history
        ]);
    }

    public function show($id) {
        $permintaan = Permintaan::with(['ruangan.gedung', 'user', 'berkas'])->where('approval','!=',0)->findOrFail($id);
        // dd($permintaan);
        return view('components.templates.user.request.show', [
            'permintaan' => $permintaan
        ]);
    }
}
