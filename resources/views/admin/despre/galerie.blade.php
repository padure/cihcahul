@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="col-md-12" style="padding: 10px; padding-top: 0;">
        <a href="#"><button class="btn btn-primary col-md-12"><i class="fa fa-plus" ></i> Adaugati Imagine</button></a>
    </div>
    <div class="col-md-12">
        @foreach($foto as $poza)
        <div class="col-md-3">
            <img src="{{URL::asset($poza->image)}}" class="img-responsive img-thumbnail" alt="Imaginea lipseste">
        </div>
        @endforeach
    </div>
</div>
@endsection