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
		<div class="container content-sm">
			<!-- Service Blocks -->
			<div class="row margin-bottom-30">
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-compress service-icon"></i>
						<div class="desc">
							<h4>Johann Amos Comenius</h4>
							<p>Natura înzestrează copilul numai cu „semințele științei, ale moralității și religiozității”, ele devin un bun al fiecărui om numai prin educație.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-cogs service-icon"></i>
						<div class="desc">
							<h4>Aristotel</h4>
							<p>Cei care educa copiii sunt demni de mai multa onoare decat cei care le dau viata; de aceea pe langa viata, daruiti copiilor si arta de a trai bine, educandu-i.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-rocket service-icon"></i>
						<div class="desc">
							<h4>Thomas Chandler Haliburton</h4>
							<p>Educatia pe care o primesti la colegiu iti arata cat de putin stim in realitate.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Blokcs -->

			<!-- Recent Works -->
			<div class="headline"><h2>Activități recente</h2></div>
			<div class="row margin-bottom-20">
                         @foreach($sidebar as $article)
				<div class="col-md-3 col-sm-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
						<div class="thumbnail-img">
							<div class="overflow-hidden">
								<img class="img-responsive" src="{{$article->image}}" alt="">
							</div>
							<a class="btn-more hover-effect" href="{{route('ShowArticle',['id'=>$article->id])}}">Citește mai mult +</a>
						</div>
						<div class="caption">
							<h3><a class="hover-effect" href="#">{{$article->title}}</a></h3>
							<p>{{$article->description}}</p>
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