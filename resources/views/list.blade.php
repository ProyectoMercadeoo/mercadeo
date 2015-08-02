@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'cargo/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "nombre" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('cargo.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('cargo.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Nombre</th>             
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->nombre }}</td>
                    <td>{{ $cargo->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('cargo.edit',['cod_cargo' => $cargo->cod_cargo] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('cargo/destroy',['cod_cargo' => $cargo->cod_cargo] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
@endsection