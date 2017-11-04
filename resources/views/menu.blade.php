<div class="navbar navbar-default">
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="{{URL('/')}}">
					<img src="{{URL::asset('assets/img/logocih.png')}}" alt="Logo">
				</a>
				<!-- End Logo -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li class="menu">
							<a href="{{URL('/')}}">
								Acasă
							</a>
						</li>	

						<!-- Pages -->
                                                
						<li class="dropdown menu">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Educaţie
							</a>
							<ul class="dropdown-menu">
                                                                <li><a href="{{url('specialitati')}}">Specialități</a></li>
                                                                <li><a href="{{url('galerie')}}">Galerie Foto</a></li>
                                                                <li><a href="{{url('catedre')}}">Catedre</a></li>
                                                                <li><a href="{{url('elevi')}}">Elevi</a></li>
                                                                <li><a href="{{url('consiliul-elevilor')}}">Consiliul elevilor</a></li>
							</ul>
						</li>
						<!-- Demo Pages -->
						<li class="dropdown menu">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Admitere
							</a>
							<ul class="dropdown-menu">
                                                                <li><a href="{{route('conditii')}}">Condiții de admitere</a></li>
                                                                <li><a href="{{URL::asset('assets/regulament_admitere.pdf')}}">Regulament</a></li>
                                                                <!--li><a href="">Rezultatele admiterii</a></li-->
							</ul>
						</li>
                                                <li class="dropdown menu">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Orar
							</a>
							<ul class="dropdown-menu">
                                                            <li><a href="{{URL::asset('orar.cihcahul.md/index.html')}}">Orar</a></li>
                                                            <li><a href="{{URL::asset('assets/fisiere/Orar_arte_Semestrul1_2017_2018.pdf')}}">Orar Arte</a></li>
							</ul>
						</li>
						
						<!-- Features -->
                                                <li class="menu">
							
						</li>
                                                <li class="dropdown menu">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Avize
							</a>
							<ul class="dropdown-menu">
                                                            <li><a href="{{URL('/events')}}">Evenimente</a></li>
                                                            <li><a href="{{url('achizitii')}}">Achiziţii publice</a></li>
							</ul>
						</li>
						<!-- End Features -->

						<!-- Shortcodes -->
                                                <li class="menu">
							<a href="{{URL('/about')}}">
								Despre
							</a>
						</li>
						<!-- End Shortcodes -->

						<!-- Demo Pages -->
                                                <li class="menu">
							<a href="{{URL('/contact')}}">
								Contacte
							</a>
						</li>
						<!-- End Demo Pages -->

					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>
        </div>
     </div>