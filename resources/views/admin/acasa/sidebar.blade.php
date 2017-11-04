@extends('layouts.app')
@section('content')
<div class="container">
    <div class="alert alert-danger">Atentie! toate imaginile trebuie sa fie de o marime! (3072 x 1138)</div>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>Id</th>
        <th>Imagine</th>
        <th>Setari</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="3"><button class="btn btn-success col-md-2 col-md-offset-5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                    Incarca Imaginea</button>
            </td>
        </tr>
        @foreach ($slider as $slid)
        <tr>
            <td>{{ $slid->id }}</td>
            <td><img class="img-responsive" src="http://127.0.0.1:8000/{{ $slid->image }}" alt=""></td>
            <td><button class="btn btn-danger">Delete</button></td>
        </tr>
    @endforeach
      
        
      </tr>
    </tbody>
  </table>
    
</div>
@endsection