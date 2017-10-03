@extends('welcome')
@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Despre</h2>
            <p>Colegiul Iulia Hasdeu</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="">Home</a></li>
              <li>Despre</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">
     @foreach($menu as $men)
     <div class="col-md-2">
     <a href="#"><img src="{{$men->image}}" alt="" /></a>
     </div>
     @endforeach

            

          </div>

          

            

                

              </div>
            </div>

          </div>

         
            

            

         
         

          


      
    
@endsection
