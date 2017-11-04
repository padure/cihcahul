@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titlu</th>
        <th>Continut</th>
        <th>Autor</th>
        <th>Descriere</th>
        <th>Data</th>
        <th>URL images</th>
        <th>Tags</th>
        <th>Vizualizari</th>
        <th colspan="2">Setari</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($evenimente as $event)
      <tr>
        <td>{{ $event->id }}</td>
        <td>{{  $event->title }}</td>
        <td style="text-align: justify;">{{ str_limit($event->content, 250) }}</td>
        <td>{{  $event->author }}</td>
        <td>{{ str_limit($event->description, 50)  }}</td>
        <td>{{ $event->date }}</td>
        <td><img class="img-responsive" src="http://127.0.0.1:8000/{{ $event->image }}" alt=""></td>
        <td>{{ $event->tags }}</td>
        <td>{{ $event->views }}</td>
        <td><a href="{{$event->id}}/edit"><button class="btn btn-success">Edit</button></a></td>
        <td><button class="btn btn-danger">Delete</button></td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection