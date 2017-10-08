<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdmitereController extends Controller
{
    public function regulament() {
        if (Auth::check()) {
        return view('admin.admitere.regulament');
        }
        else{
            return redirect('admin');
        }
    }
}
