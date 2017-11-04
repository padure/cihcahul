@extends('layouts.home')
@section('content')  
	<link rel="stylesheet" href="{{URL::asset('assets/css/pages/catedre.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="catedre">
            <div class="container-fluid margin-bottom-100" style="padding-left: 0; padding-right: 0;">
                <div class="catedre-intro">
                        <p class="text-center">Catedre</p>
                </div>
                
                <!-- Catedre-->
                @foreach ($catedra as $cat)
                    <div class="col-md-12 info-catedre slideanim">
                        {!! $cat->content !!}
                    </div>
                 @endforeach
               
            </div>
        </div>
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
@endsection