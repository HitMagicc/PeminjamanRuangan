<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
        $permintaan = Permintaan::where('approval',0)->where('id_user',$user->id)->get();
        $history =  Permintaan::where('approval','!=',0)->where('id_user',$user->id)->get();
        // dd($history);
        return view('components.templates.user.dashboard.index', [
            'user'=>$user,
            'permintaan'=>$permintaan,
            'history'=>$history,
        ]);
    }
}
