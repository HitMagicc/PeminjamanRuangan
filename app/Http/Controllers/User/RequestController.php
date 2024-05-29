<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index(){
        return view('components.templates.user.request.index', []);
    }

    public function show(){
        return view('components.templates.user.request.show', []);
    }
}
