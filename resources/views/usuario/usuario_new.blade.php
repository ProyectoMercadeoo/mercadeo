@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'pregunta.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                      {!! Form::label('full_name', 'pregunta') !!}
                      {!! Form::text('pregunta', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                  </div>    
                  <div class="form-group">
                      {!! Form::label('full_name', 'fk_entorno') !!}
                      {!! Form::text('fk_entorno', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      
                  </div>      
                   <div class="form-group">
                      {!! Form::label('full_name', 'fk_encuesta') !!}
                      {!! Form::text('fk_encuesta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      
                  </div> 
                   <div class="form-group">
                      {!! Form::label('full_name', 'fk_tipo_pregunta') !!}
                      {!! Form::text('fk_tipo_pregunta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      
                  </div>          
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection		