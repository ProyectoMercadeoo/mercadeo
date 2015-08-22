@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'pregunta/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">pregunta</label>
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