@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'concepto/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">tipo</label>
            <input type="text" class="form-control" name = "tipo" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('concepto.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('concepto.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>tipo</th>             
                  <th>descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conceptos as $concepto)
                <tr>
                    <td>{{ $concepto->tipo }}</td>
                    <td>{{ $concepto->descripcion }}</td>
                    <td>{{ $concepto->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('concepto.edit',['id' => $concepto->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('concepto/destroy',['id' => $concepto->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
@endsection