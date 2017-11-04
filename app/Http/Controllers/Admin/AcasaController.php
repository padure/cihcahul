<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Main_slider;
use App\Partener;

class AcasaController extends Controller
{
    public function sidebar() {
        if (Auth::check()) {
            $slider= Main_slider::Select(['id','image'])->get();
        return view('admin.acasa.sidebar', compact('slider'));
        }
        else{
            return redirect('admin');
        }
    }
    public function parteneri() {
        if (Auth::check()) {
            $parteneri= Partener::Select(['id','image'])->get();
        return view('admin.acasa.parteneri', compact('parteneri'));
        }
        else{
            return redirect('admin');
        }
    }
}
