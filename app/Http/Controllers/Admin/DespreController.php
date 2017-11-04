<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catedre;
use Illuminate\Support\Facades\Auth;

class DespreController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $catedre = Catedre::all();
        return view('admin.despre.catedre', compact('catedre'));
        }
        else{
            return redirect('admin');
        }
    }
    
    public function insert() {
        if (Auth::check()) {
            
        return view('admin.despre.insert');
        }
        else{
            return redirect('admin');
        }
    }
    
    public function edit($id) {
        if (Auth::check()) {
            $catedre = Catedre::findOrFail($id); 
        return view('admin.despre.edit', compact('catedre'));
        }
        else{
            return redirect('admin');
        }
    }
    
    public function update($id, \App\Http\Requests\CreateCatedreRequest $request) {
        if (Auth::check()) {
        $catedre = Catedre::findOrFail($id); 
        $catedre->update($request->all());
        return redirect('admin/catedre');
        }
        else{
            return redirect('admin');
        }
    }
    
    public function store( \App\Http\Requests\CreateCatedreRequest $request) {
        if (Auth::check()) {
            
            Catedre::create($request->all());
        return redirect('admin/catedre');
        }
        else{
            return redirect('admin');
        }
    }
}
