@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'encuesta.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                      {!! Form::label('full_name', 'fecha_encuesta') !!}
                      {!! Form::date('fecha_encuesta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      {!! Form::label('full_name', 'instrucciones') !!}
                      {!! Form::text('instrucciones', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>                  
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection		