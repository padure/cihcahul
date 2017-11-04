@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <a href="#"><button class="btn btn-primary col-md-12"><i class="fa fa-plus" ></i> Adaugati Specialitate</button></a>
    <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nume</th>
        <th>Continut</th>
        <th colspan="2">Setari</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($specialitate as $sp)
      <tr>
        <td>{{ $sp->id }}</td>
        <td>{{  $sp->denumire }}</td>
        <td style="text-align: justify;">{{ str_limit($sp->content, 250) }}</td>
        <td><a href="#"><button class="btn btn-success">Edit</button></a></td>
        <td><button class="btn btn-danger">Delete</button></td>
      </tr>
        @endforeach
    </tbody>
</div>
@endsection