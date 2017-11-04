@extends('layouts.app')
@section('content')
<div class="container">
    
    @include('errors.errors')
    
    {!! Form::open(['url'=>'admin/add/catedre']) !!}
        <div class="form-group">
            {!! Form::label('nume', 'Nume Catedra:') !!}
            {!! Form::text('nume', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Continut:') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control', 'id'=>'summernote']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Adăugaţi Catedra', ['class'=>'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    
    <script>
      $('#summernote').summernote({
        placeholder: 'Add Catedre',
        tabsize: 2,
        height: 400
      });
    </script>
</div>



    
@endsection