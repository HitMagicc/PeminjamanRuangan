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
}
