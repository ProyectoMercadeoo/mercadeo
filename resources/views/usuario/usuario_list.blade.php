@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'usuario/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">tipo_documento</label>
            <input type="text" class="form-control" name = "tipo_documento" >
             <label for="exampleInputName2">primer_nombre</label>
            <input type="text" class="form-control" name = "primer_nombre" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
             <label for="exampleInputName2">Usuario</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('pregunta.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('pregunta.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
    <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>tipo_pregunta</th>             
                </tr>
            </thead>
            <tbody>
                @foreach($preguntas as $pregunta)
                <tr>
                    <td>{{ $pregunta->pregunta }}</td>
                    <td>{{ $pregunta->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('pregunta.edit',['id' => $pregunta->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('pregunta/destroy',['id' => $pregunta->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
@endsection