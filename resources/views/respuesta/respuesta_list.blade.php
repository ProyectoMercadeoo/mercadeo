@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'respuesta/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">respuesta</label>
            <input type="text" class="form-control" name = "respuesta" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('respuesta.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('respuesta.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
    <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>respuesta</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($respuestas as $respuesta)
                <tr>
                    <td>{{ $respuesta->respuesta }}</td>
                    <td>{{ $respuesta->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('respuesta.edit',['id' => $respuesta->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('respuesta/destroy',['id' => $respuesta->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
@endsection