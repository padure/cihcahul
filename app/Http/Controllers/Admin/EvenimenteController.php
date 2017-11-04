<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Article;

class EvenimenteController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $evenimente=Article::latest('id')->get();
        return view('admin.evenimente.index', compact('evenimente'));
        }
        else{
            return redirect('admin');
        }
        
    }
    
    public function creare() {
        if (Auth::check()) {
            
        return view('admin.evenimente.insert');
        }
        else{
            return redirect('admin');
        }
        
    }
    
    public function store( \App\Http\Requests\CreateArticleRequest $request) {
        if (Auth::check()) {
            
            Article::create($request->all());
        return redirect('admin/evenimente');
        }
        else{
            return redirect('admin');
        }
    }
    
    public function edit($id) {
        
        if (Auth::check()) {
        $article = Article::findOrFail($id);    
            
        return view('admin.evenimente.edit', compact('article'));
        }
        else{
            return redirect('admin');
        }
    }
    
    public function update($id, \App\Http\Requests\CreateArticleRequest $request) {
        if (Auth::check()) {
        $article = Article::findOrFail($id); 
        $article->update($request->all());
        return redirect('admin/evenimente');
        }
        else{
            return redirect('admin');
        }
    }
}
