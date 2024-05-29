<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function index(){
        return view('components.templates.admin.gedung.index', []);
    }
    public function create(){
        return view('components.templates.admin.gedung.create', []);
    }
}
