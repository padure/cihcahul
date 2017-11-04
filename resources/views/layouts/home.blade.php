<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>CIHCAHUL - Colegiul Iulia Hasdeu Din Cahul</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/headers/header-default.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/footers/footer-v1.css')}}">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/animate.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/line-icons/line-icons.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/fancybox/source/jquery.fancybox.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css')}}">
         <link rel="stylesheet" href="{{URL::asset('assets/css/pages/shortcode_timeline1.css')}}">
	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/theme-colors/default.css" id="style_color')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/theme-skins/dark.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	</head>

<body>
    
    <div class="copyright menu-top">
	<div class="container-fluid">
		<div class="row">
						<!-- Social Links -->
                    <div class="col-md-6 col-md-offset-6">
			<ul class="footer-socials list-inline">
                            <li class="pull-right">
									<a href="https://www.facebook.com/cihcahul.md/" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
                                                                <li class="pull-right">
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
                                                                <li class="pull-right">
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li class="pull-right">
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li class="pull-right">
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li class="pull-right">
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="pull-right">
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
                        @include('menu')
		<!--=== End Header ===-->

                @yield('content')
                		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container-fluid">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="{{url('/')}}"><img id="logo-footer" class="footer-logo" src="{{URL::asset('assets/img/logocih.png')}}" alt=""></a>
							<p>La naștere, natura înzestrează copilul numai cu „semințele științei, ale moralității și religiozității”, ele devin un bun al fiecărui om numai prin educație. Educația este o activitate de stimulare a acestor „semințe”, și implicit, de conducere a procesului de umanizare, omul ”nu poate deveni om decât dacă este educat”.</p>
							</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
                                            
						<div class="col-md-3 md-margin-bottom-40">
                                                    
							<div class="posts">
								<div class="headline"><h2>Ultimele postări</h2></div>
								<ul class="list-unstyled latest-list">
						         @foreach($reccent as $rec)	
                                                                    <li>
										<a href="{{route('ShowArticle',['id'=>$rec->id])}}">{{$rec->title}}</a>
										<small>{{$rec->date}}</small>
                                                                        </li>
                                                                  @endforeach  
								</ul>
							</div>
                                                   
						</div><!--/col-md-3-->
						<!-- End Latest -->
                                          
						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Categorii</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="{{URL('/about')}}">Despre</a><i class="fa fa-angle-right"></i></li>
								<li><a href="{{url('conditii')}}">Admitere</a><i class="fa fa-angle-right"></i></li>
								<li><a href="{{URL('/events')}}">Evenimente</a><i class="fa fa-angle-right"></i></li>
								<li><a href="http://orar.cihcahul.md/">Orar</a><i class="fa fa-angle-right"></i></li>
								<li><a href="{{URL::asset('assets/fisiere/Orar_arte_Semestrul1_2017_2018.pdf')}}">Orar Arte</a><i class="fa fa-angle-right"></i></li>
								<li><a href="{{URL('/contact')}}">Contacte</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contacte</h2></div>
							<address class="md-margin-bottom-40">
								36, Dunării Cahul 3909 <br />
								Republica Moldova <br />
								Phone: +373 0299-4-15-30 <br />
								Email: <a href="mailto:cihsecretariat@cihcahul.md" class="">cihsecretariat@cihcahul.md</a>
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2016 &copy; Toate drepturile rezervate.
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="https://www.facebook.com/cihcahul.md/" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->

	

	<!-- JS Global Compulsory -->
	
	<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{URL::asset('assets/plugins/back-to-top.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/smoothScroll.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery.parallax.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/plugins/fancy-box.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/plugins/owl-carousel.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/plugins/style-switcher.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/plugins/revolution-slider.js')}}"></script>
	<script src="js/jquery.stellar.min.js"></script>	
        <script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initParallaxBg();
				FancyBox.initFancybox();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();
				RevolutionSlider.initRSfullWidth();
			});
	</script>
        
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
			<script src="assets/plugins/placeholder-IE-fixes.js"></script>
		<![endif]-->
        <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
});
</script>

	</body>
	</html>
