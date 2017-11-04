@extends('layouts.home')
@section('content')  
	<link rel="stylesheet" href="{{URL::asset('assets/css/pages/page_job_inner2.css')}}">
<!--=== Job Description ===-->
	<div class="job-description">
                @if ($specialitate)
                    @foreach($specialitate as $sp)
                        {!!$sp->content!!}
                    @endforeach
                @else
                    <img class="img-responsive" src="{{asset('img/sistems/in_constructie.jpg')}}">
                @endif
	</div>    
	<!--=== End Job Description ===-->
@endsection