@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'tipo_pregunta/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">tipo_pregunta</label>
            <input type="text" class="form-control" name = "tipo_pregunta" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('tipo_pregunta.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('tipo_pregunta.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
    <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>tipo_pregunta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipo_preguntas as $tipo_pregunta)
                <tr>
                    <td>{{ $tipo_pregunta->tipo_pregunta }}</td>
                    <td>{{ $tipo_pregunta->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('tipo_pregunta.edit',['id' => $tipo_pregunta->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('tipo_pregunta/destroy',['id' => $tipo_pregunta->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
@endsection