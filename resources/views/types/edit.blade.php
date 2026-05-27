@extends('layouts.types')

@section('title', 'Modificare')
    
@section('content')

    <form class="container" action="{{route('type.update',$type)}}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3 form-control mb-3 d-flex flex-column">
    <label for="name" class="form-label">Nome del linguaggio</label>
    <input type="text" class="form-control" value="{{$type->name}}" name="name" id="name" aria-describedby="emailHelp">

  </div>
  <div class="mb-3 form-control mb-3 d-flex flex-column">
    <label for="description" class="form-label">Descrizione del linguaggio</label>
    <textarea name="description" id="description" cols="30" rows="5">{{$type->description}}</textarea>
  </div>
  <a href="{{route('type.index')}}" class="btn btn-secondary">Anulla</a>
  <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>
@endsection