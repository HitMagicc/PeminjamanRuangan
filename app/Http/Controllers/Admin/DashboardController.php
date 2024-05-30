<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('components.templates.admin.dashboard.index', []);
    }
    public function show(){
        return view('components.templates.admin.dashboard.show', []);
    }
}
