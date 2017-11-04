<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Speciality;

class SpecialitatiController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $specialitate = Speciality::all();
        return view('admin.specialitati.index', compact('specialitate'));
        }
        else{
            return redirect('admin');
        }
        
    }
}
