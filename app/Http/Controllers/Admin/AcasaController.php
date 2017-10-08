<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AcasaController extends Controller
{
    public function sidebar() {
        if (Auth::check()) {
        return view('admin.acasa.sidebar');
        }
        else{
            return redirect('admin');
        }
    }
    public function parteneri() {
        if (Auth::check()) {
        return view('admin.acasa.parteneri');
        }
        else{
            return redirect('admin');
        }
    }
    public function footer() {
        if (Auth::check()) {
        return view('admin.acasa.infofooter');
        }
        else{
            return redirect('admin');
        }
    }
}
