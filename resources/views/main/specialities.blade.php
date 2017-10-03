@extends('layouts.home')
@section('content')  
	<link rel="stylesheet" href="{{URL::asset('assets/css/pages/page_job_inner2.css')}}">
<!--=== Job Description ===-->
	<div class="job-description">
		@if($recent)
                {!!$recent->content!!}
                @endif
	</div>    
	<!--=== End Job Description ===-->
@endsection