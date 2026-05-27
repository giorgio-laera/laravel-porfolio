@extends('layouts.types')

@section('title', 'Creazione')
    
@section('content')

    <form class="container" action="{{route('type.store')}}" method="POST">
        @csrf
  <div class="mb-3 form-control mb-3 d-flex flex-column">
    <label for="name" class="form-label">Nome del linguaggio</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">

  </div>
  <div class="mb-3 form-control mb-3 d-flex flex-column">
    <label for="description" class="form-label">Descrizione del linguaggio</label>
    <textarea name="description" id="description" cols="30" rows="5"></textarea>
  </div>
  <a href="{{route('type.index')}}" class="btn btn-secondary">Anulla</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection