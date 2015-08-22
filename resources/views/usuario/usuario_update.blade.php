@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($pregunta,['route' => 'pregunta.update', 'method' => 'put', 'novalidate']) !!}
            
                {!! Form::hidden('id', $pregunta->id) !!}
            
                <div class="form-group">
                      {!! Form::label('full_name', 'pregunta') !!}
                      {!! Form::text('pregunta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>                           
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection