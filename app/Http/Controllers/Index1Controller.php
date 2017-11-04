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
use Mail;
use DB;
use App\Catedre;

class Index1Controller extends Controller
{
    public function index(){
	   
            
           $message= Article::get();
           $specialt=Speciality::get();
           $num=0;
           $sidebar=Article::orderBy('id','desc')->limit(3)->get();
           $m_slider= Carousel::get();
           $latest_events=Article::orderBy('date','desc')->limit(3)->get();
           $parten= Partener::get();
           $slider= Main_slider::get();
         
          $menu=Menu::get();
         
           
//dump($num);
	   return view('main.index')->with(['articles'=>$message,'specialit'=>$specialt,'numar'=>$num,'sidebar'=>$sidebar,'reccent'=>$latest_events,'m_slider'=>$m_slider,'partene'=>$parten,'menu'=>$menu,'slider'=>$slider]);
	   
   }
  
   
   public function contact(){
     $specialt=Speciality::select(['denumire','id'])->get();
     $latest_events=Article::select(['id','title','date','image','author','description','views'])->orderBy('date','desc')->limit(3)->get();



       return view('main.contact')->with(['recent'=>$latest_events,'specialit'=>$specialt,'reccent'=>$latest_events]);
   }

	
   public function show(){
       
     $article=Article::select(['id','title','content','author','description','date','image','views','tags'])
             ->orderBy('id', 'desc')
             ->paginate(3); 
	 $specialt=Speciality::select(['denumire','id'])->get();
     $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(4)->get();
     $sideb=Speciality::select(['denumire'])->get();
     $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(5)->get();
     return view('main.events')->with(['articles'=>$article,'sidebar'=>$sidebar,'sideb'=>$sideb,'recent'=>$latest_events,'specialit'=>$specialt,'reccent'=>$latest_events]); 
   }
   public function showarticle($id){
	   Article::where('id',$id)->increment('views');
       $articl=Article::select(['id','title','content','author','description','date','image','views','tags'])->where('id',$id)->first();
        $art_M=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();
      $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
     $sideb=Speciality::select(['id','denumire'])->get();
     $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(5)->get();
        $specialt=Speciality::select(['denumire','id'])->get();
    
       return view('main.more')->with(['article'=>$articl,'sidebar'=>$sidebar,'sideb'=>$sideb,'article_M'=>$art_M,'recent'=>$latest_events,'specialit'=>$specialt,'reccent'=>$latest_events]);
       
   }
   
   public function specialitati() {
       $specialitate= Speciality::select(['id', 'denumire', 'nr', 'content'])->get();
       $reccent=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
       return view('main.specialitati', compact('reccent', 'specialitate'));
   }
   
   public function catedre() {
       
       $reccent=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
       $catedra= Catedre::all();
       return view('main.catedre', compact('reccent', 'catedra'));
   }
   
   public function showmenu(){
      $menu=Menu::select(['menulist'])->get();
      //dump($articl);
      $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
       return view('welcome')->with(['menu'=>$menu,'sideb'=>$sidebar]);
   }
   
  
 
      public function showadministratia(){
		$menu= Administratia::select(['id','nume','functie','descriere','image'])->get();
		   //dump($articl);
	   $specialt=Speciality::select(['denumire','id'])->get();
	   $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('date','desc')->limit(3)->get();
		   return view('main.about')->with(['menu'=>$menu,'recent'=>$latest_events,'specialit'=>$specialt,'reccent'=>$latest_events]);
   } 
	public function sendEmail(Request $request){
		$email=$request->email;
		Mail::send('emails.contact', ['name' => $request->name, 'email' => $request->email , 'mesaj'=>$request->mesaj ], function ($m) use ($email) {
			$m->to('cihsecretariat@cih.md')->subject('Email de la '.$email);
		});
		return redirect()->back()->withFlashSuccess('Email Trimis');
	}
	public function conditii(){
		$specialt=Speciality::select(['denumire','id'])->get();
       	$latest_events=Article::select(['id','title','date','image','author','description','views'])->orderBy('date','desc')->limit(3)->get();
		$acte=DB::table('acte')->get();
		$intrebari=DB::table('intrebari_fregvente')->get();
		return view('main.conditii')->with(['reccent'=>$latest_events,'specialit'=>$specialt,'acte'=>$acte , 'intrebari'=>$intrebari]);
	}
        
        public function elevi() {
            $reccent=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
            return view('main.elevi', compact('reccent'));
        }
        
        public function galerie() {
            $foto= Carousel::Select(['id','image'])->get();
            $reccent=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
            return view('main.galerie', compact('reccent', 'foto'));
        }
        
        public function achizitie() {
            $reccent=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
            return view('main.achizitii', compact('reccent'));
        }
        
        public function consiliu() {
            $reccent=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
            return view('main.consiliu', compact('reccent'));
        }
}
