@extends('layouts.home')
@section('content')
    <!--=== Slider ===-->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
							
              @foreach($slider as $s)
		<!-- SLIDE -->
		<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000">
			<!-- MAIN IMAGE -->
			<img src="{{URL::asset($s->image)}}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
	<!-- LAYER -->
	<div class="sft"
	data-x="center"
	data-hoffset="0"
	data-y="310"
	data-speed="1600"
	data-start="2800"
	data-easing="Power4.easeOut"
	data-endspeed="300"
	data-endeasing="Power1.easeIn"
	data-captionhidden="off"
	style="z-index: 6">
        </div>
<div class="tp-caption revolution-ch1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Bun venit la Colegiul "Iulia Hasdeu"
					</div>
        
					<div class="tp-caption revolution-ch2 sft"
					data-x="center"
					data-hoffset="0"
					data-y="220"
					data-speed="1400"
					data-start="2000"
					data-easing="Power4.easeOut"
					data-endspeed="300"
					data-endeasing="Power1.easeIn"
					data-captionhidden="off"
					style="z-index: 6">
					Fii mândru de alegerea făcută!!!
				</div>

				<!-- LAYER -->
				<div class="tp-caption sft"
				data-x="center"
				data-hoffset="0"
				data-y="310"
				data-speed="1600"
				data-start="2800"
				data-easing="Power4.easeOut"
				data-endspeed="300"
				data-endeasing="Power1.easeIn"
				data-captionhidden="off"
				style="z-index: 6">
				<a href="{{URL('/about')}}" class="btn-u btn-brd btn-brd-hover btn-u-light">Despre</a>
			</div>
                </li>
            @endforeach
<!-- END SLIDE -->

</li>
<!-- END SLIDE -->
</ul>
<div class="tp-bannertimer tp-bottom"></div>
</div>
</div>
<!--=== End Slider ===-->

		<!--=== Content Part ===-->
		<div class="container-fluid content-sm content-index">

			<!-- Recent Works -->
			<div class="headline"><h2>Activități recente</h2></div>
			<div class="row margin-bottom-20">
                         @foreach($sidebar as $article)
				<div class="col-md-4 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
                                            <div class="caption" style="height: 90px;">
                                                <h3><a class="hover-effect" href="{{route('ShowArticle',['id'=>$article->id])}}">{{$article->title}}</a></h3>
                                            </div>
                                            <div class="thumbnail-img">
							<div class="overflow-hidden">
                                                            <img class="img-responsive" src="{{$article->image}}" alt="" style="width: 100%;">
							</div>
                                                <a class="btn-more hover-effect" href="{{route('ShowArticle',['id'=>$article->id])}}" style="bottom: 10px;">Citește mai mult +</a>
                                            </div>
                                            <div class="caption" style="height: 90px;">
                                                <hr style="margin: 10px;"/>
                                                	
                                                <p>{{str_limit($article->description, 190)}}</p>
                                            </div>
					</div>
				</div>
                               @endforeach
				
			</div>
			<!-- End Recent Works -->

			<!-- Info Blokcs -->
			<div class="row margin-bottom-30">
				<!-- Welcome Block -->
				<div class="col-md-8 md-margin-bottom-40">
					<div class="headline"><h2>ECVET</h2></div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-20" src="assets/img/ecvet.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p>EUROPEAN CREDIT SYSTEM FOR VOCATIONAL EDUCATION TRAINING – SISTEMUL EUROPEAN DE CREDITE PENTRU FORMARE EDUCAŢIONALĂ VOCAŢIONALĂ.</p>
                                                        <p>În perioada actuală de competiţie globală intensă, caracterizată totodată de un număr mare de muncitori slab calificaţi şi de o populaţie îmbătrânită, viitorul Europei trebuie să fie asigurat prin competitivitate şi inovare. </p>
                                                        <p>Aproape că nu există un alt sector economic în care flexibilitatea şi mobilitatea forţei de muncă să aibă o atât de mare importanţă. În această etapă mobilitatea este îngreunată datorită lipsei unor calificări şi competenţe transparente şi recunoscute, iar în Europa există o nevoie reală de modele care să permită recunoaşterea reciprocă a competenţelor şi abilităţilor.</p>
                                                </div>
					</div>
				</div><!--/col-md-8-->

	<!-- Latest Shots -->
				<div class="col-md-4 md-margin-bottom-20">
					<div class="headline"><h2>Poze</h2></div>
					<div id="myCarousel" class="carousel slide carousel-v1">
						<div class="carousel-inner" role="listbox">
                                               @foreach($m_slider as $slide)
                                                   @if ($slide->id == 1)
                                               <div class="item active">
                                                 @else
                                             <div class="item">
                                                @endif  
                                              <img src="{{URL::asset($slide->image)}}" alt="">
                                               </div>
                                                 @endforeach
                                               </div>  
							
								
							
                                                    
						

						<div class="carousel-arrow">
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div><!--/col-md-4-->
			</div><!--/row-->
			<!-- End Info Blokcs -->

			
			
			 <!-- Owl Carousel v2 -->
                                    <div class="headline"><h2>Parteneri</h2></div>
					<div class="owl-carousel-v2 owl-carousel-style-v1 margin-bottom-50">
						<div class="owl-slider-v2">
                                                      @foreach($partene as $part)
							<div class="item">
								<img class="img-responsive" src="{{URL::asset($part->image)}}" alt="">
							</div>
                                                      @endforeach
						</div>

						<div class="owl-navigation">
							<div class="customNavigation">
								<a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
								<a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
							</div>
						</div><!--/navigation-->
					</div>
					<!-- End Owl Carousel v2 -->
                        
                                 
		</div><!--/container-->
		<!-- End Content Part -->
@endsection