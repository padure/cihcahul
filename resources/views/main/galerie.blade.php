@extends('layouts.home')
@section('content') 
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>


<div class="container-fluid galerie">
    <link rel="stylesheet" href="{{URL::asset('assets/css/pages/galerie.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/simplelightbox.min.css')}}">
    <div class="catedre-intro">
        <p class="text-center">Galeria Foto</p>
    </div>
    <h2 class="text-center">Toate pozele din galerie</h2>
    <div class="container-fluid slideanim">
            @foreach($foto as $poza)
                <div class="col-md-3 padding">
                    <div class="gallery">
                        <a href="{{URL::asset($poza->image)}}" class="big"><img class="img-responsive" src="{{URL::asset($poza->image)}}" alt="" title="" /></a>
                    </div>
                </div>
            @endforeach
    </div>
    


<script type="text/javascript" src="{{ asset('js/simple-lightbox.js') }}"></script>
<script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>
</div>
@endsection