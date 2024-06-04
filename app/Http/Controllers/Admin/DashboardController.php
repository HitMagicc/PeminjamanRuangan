<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $permintaan = Permintaan::where('approval',0)->get();
        return view('components.templates.admin.dashboard.index', [
            'permintaan'=>$permintaan
        ]);
    }

    public function show($id){
        $p = Permintaan::with(['ruangan','user','berkas.jurusan'])->where('id',$id)->first();
        // dd($p);
        return view('components.templates.admin.dashboard.show', [
            'p'=>$p
        ]);
    }

    public function update(Request $request, $id) {
        $permintaan = Permintaan::findOrFail($id);
    
        $approval = $request->input('approval');
        $alasan = $request->has('alasan_terima') ? $request->alasan_terima : $request->alasan_tolak;
    
        $permintaan->update([
            'approval' => $approval,
            'alasan' => $alasan
        ]);
    
        return redirect()->route('admin.riwayat.show',$id)->with([
            'success' => 'Status updated successfully',
            'permintaan' => $permintaan
        ]);
    }
}
