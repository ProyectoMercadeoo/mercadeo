@extends('app')
@section('content')
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'encuesta/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
            <label for="exampleInputName2">fecha</label>
            <input type="date" class="form-control" name = "fecha_encuesta" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        <a href="{{ route('encuesta.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('encuesta.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!}
        <br>
    <table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>fecha</th>             
                  <th>instruccines</th>
                </tr>
            </thead>
            <tbody>
                @foreach($encuestas as $encuesta)
                <tr>
                    <td>{{ $encuesta->fecha_encuesta }}</td>
                    <td>{{ $encuesta->instrucciones }}</td>
                    <td>{{ $encuesta->fechaCreacion }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('encuesta.edit',['id' => $encuesta->id] )}}" >Edit</a> 
                        <a class="btn btn-danger btn-xs" href="{{ route('encuesta/destroy',['id' => $encuesta->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
@endsection