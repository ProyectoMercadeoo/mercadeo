@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($concepto,['route' => 'concepto.update', 'method' => 'put', 'novalidate']) !!}
            
                {!! Form::hidden('id', $concepto->id) !!}
            
                <div class="form-group">
                      {!! Form::label('full_name', 'tipo') !!}
                      {!! Form::text('tipo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                      {!! Form::label('full_name', 'descripcion') !!}
                      {!! Form::text('descripcion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>                           
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection