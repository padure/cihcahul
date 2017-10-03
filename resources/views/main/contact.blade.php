@extends('layouts.home')
@section('content')
        <link rel="stylesheet" href="assets/css/pages/page_contact.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBlCqq2AHWY-ZJJMAI2-gszGP1nHc2tVrA" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <!-- Google Map -->
		<div id="map" class="map">
		</div><!---/map-->
		<!-- End Google Map -->	
        <!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<div class="headline"><h2>Contacte</h2></div>
					
					<form method='post' action='{{route('sendemail')}}'>
						{{ csrf_field() }}
						<fieldset class="no-padding">
							<label>Nume <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control" required>
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="email" name="email" id="email" class="form-control" required>
									</div>
								</div>
							</div>

							<label>Mesaj <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="mesaj" id="mesaj" class="form-control" required></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Expediază Mesaj</button></p>
						</fieldset>

						
					</form>
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Detalii</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#"><i class="fa fa-home"></i>36, Dunării Cahul 3909</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>Republica Moldova</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>+373 0299-4-15-30 </a></li>
						<li><a href="#"><i class="fa fa-globe"></i>cihsecretariat@cih.md</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Ore de lucru</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>Luni - Vineri:</strong> 8 - 16</li>
						<li><strong>Sîmbătă:</strong> 9 - 13</li>
						<li><strong>Duminică:</strong> - </li>
					</ul>

				</div><!--/col-md-3-->
			</div><!--/row-->
                </div>

	<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/forms/contact.js"></script>
	<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			ContactPage.initMap();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
@endsection
