@extends('layouts.app')
@section('content')
<div class="container admin-body col-md-8 col-md-offset-2">
    <div class="col-md-12 admin">
        <div class="col-md-3 color-1">
            <img src="{{URL::asset('img/sistems/logo/if_home_126572.png')}}" alt="Imaginea lipseste">
            <h4 class="text-center">Acasa</h4>
        </div>
        <div class="col-md-3 color-2"><img src="{{URL::asset('img/sistems/logo/if_student_309036.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Specialitati</h4></div>
        <div class="col-md-3 color-1"><img src="{{URL::asset('img/sistems/logo/if_add_126583.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Admitere</h4></div>
        <div class="col-md-3 color-2"><img src="{{URL::asset('img/sistems/logo/if_39_Calendar_106206.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Evenimente</h4></div>
    </div>
    <div class="col-md-12 admin">
        <div class="col-md-3 color-2"><img src="{{URL::asset('img/sistems/logo/if_info_293683.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Despre</h4></div>
        <div class="col-md-3 color-1"><img src="{{URL::asset('img/sistems/logo/if_tags_1608942.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Avize</h4></div>
        <div class="col-md-3 color-2"><img src="{{URL::asset('img/sistems/logo/if_084_Photo_183212.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Galerie</h4></div>
        <div class="col-md-3 color-1"><img src="{{URL::asset('img/sistems/logo/if_earphone_461372.png')}}" alt="Imaginea lipseste">
        <h4 class="text-center">Contacte</h4></div>
    </div>
</div>
@endsection