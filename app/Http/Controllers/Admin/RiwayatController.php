<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index() {
        $history = Permintaan::all()->sortBy('approval');
        return view('components.templates.admin.riwayat.index', [
            'history'=>$history
        ]);
    }

    public function show($id) {
        $p = Permintaan::where('id',$id)->first();
        return view('components.templates.admin.riwayat.show', [
            'p'=>$p
        ]);
    }
}
