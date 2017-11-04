<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carousel;
use App\Http\Controllers\Controller;

class GalerieController extends Controller
{
   public function index() {
        if (Auth::check()) {
            $foto = Carousel::all();
        return view('admin.despre.galerie', compact('foto'));
        }
        else{
            return redirect('admin');
        }
        
    }
}
