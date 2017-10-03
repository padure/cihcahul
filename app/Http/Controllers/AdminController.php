<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Speciality;
use App\Menu;
use App\Administratia;
use App\Carousel;
use App\Partener;
use App\Main_slider;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function addprof()
    {
        $prof = Administratia::select(['id', 'nume', 'functie', 'descriere', 'image'])->get();


        return view('admin.profesori')->with(['prof' => $prof]);
    }


    public function add(Request $request)
    {

        $this->validate($request, ['nume' => 'required|unique:administratias', 'functie' => 'required', 'descriere' => 'required']);
		
        $profesori = new Administratia;
        $profesori->nume=$request->nume;
		$profesori->functie=$request->functie;
		$profesori->descriere=$request->descriere;
		$profesori->image=$request->image;
        $profesori->save();
        return redirect('profesori');
    }

    public function addevent(Request $request)
    {
        $artic = Article::select(['id', 'title', 'author', 'description','date'])->get();
        $nr=0;
foreach($artic as $art)
   $nr++;
        return view('admin.event')->with(['artic' => $artic,'nr'=>$nr]);
    }


    public function addeven(Request $request)
    {
         
            $stat = new Article();
            $stat->title=$request->title;
		$stat->author=$request->author;
$stat->date=$request->date;
		$stat->tags=$request->tags;
		$stat->content=$request->content;
		$stat->description=$request->description;
		$stat->image=$request->image;
		$stat->views=$request->views;
          $stat->save();
            return redirect('addevent');}

    public function lol()
    {
        $prof = Administratia::select(['id', 'nume', 'functie', 'descriere', 'image'])->get();


        return view('admin.lol')->with(['prof' => $prof]);
    }


    public function updprof(Request $request,$id)
    {
        $date=$request->all();

        $data =Administratia::find($id);
		
        $profesori->nume=$request->nume;
		$profesori->functie=$request->functie;
		$profesori->descriere=$request->descriere;
		$profesori->image=$request->image;

        $data->save();
        return redirect('profesori');}


    public function upd($id)
    {
        $prof = Administratia::select(['id', 'nume', 'functie', 'descriere', 'image'])->where('id',$id)->first();


        return view('admin.update')->with(['prof' => $prof]);
    }

    public function showspecialities()
    {
        $special = Speciality::select(['id', 'denumire', 'nr', 'content'])->get();


        return view('admin.specialitati')->with(['special' => $special]);
    }




    public function index()
    {
        return view('admin.home');
    }

    public function addspecialities(Request $request)
    {
	
        $stat = new Speciality();
        $stat->denumire=$request->denumire;
		$stat->nr=$request->nr;
		$stat->content=$request->content;
        $stat->save();
        return redirect('admin_specialities');}



}
