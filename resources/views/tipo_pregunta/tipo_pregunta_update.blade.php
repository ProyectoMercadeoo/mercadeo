@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($tipo_pregunta,['route' => 'tipo_pregunta.update', 'method' => 'put', 'novalidate']) !!}
            
                {!! Form::hidden('id', $tipo_pregunta->id) !!}
            
                <div class="form-group">
                      {!! Form::label('full_name', 'tipo_pregunta') !!}
                      {!! Form::text('tipo_pregunta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>                           
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection