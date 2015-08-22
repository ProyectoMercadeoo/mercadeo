@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'entorno/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Tipo_Entorno</label>
            <input type="text" class="form-control" name = "tipo_entorno" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('entorno.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('entorno.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Tipo_Entorno</th>            
                </tr>
            </thead>
            <tbody>
                @foreach($entornos as $entorno)
                <tr>
                    <td>{{ $entorno->tipo_entorno }}</td>
                    <td>{{ $entorno->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('entorno.edit',['id' => $entorno->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('entorno/destroy',['id' => $entorno->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
@endsection