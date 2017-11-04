@extends('layouts.app')
@section('content')
<div class="container">
    
    @include('errors.errors')
    
    {!! Form::open(['url'=>'admin/add']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titlu:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Content:') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control', 'id'=>'summernote']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('author', 'Autor:') !!}
            {!! Form::text('author', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Descriere:') !!}
            {!! Form::text('description', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Data:') !!}
            {!! Form::date('date', date('Y-m-d'), ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Directoriu imagine:') !!}
            {!! Form::text('image', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('views', 'Vizite:') !!}
            {!! Form::number('views', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Tags:') !!}
            {!! Form::text('tags', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Adăugaţi eveniment', ['class'=>'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    
    <script>
      $('#summernote').summernote({
        placeholder: 'Add Evenimente',
        tabsize: 2,
        height: 400
      });
    </script>
</div>



    
@endsection