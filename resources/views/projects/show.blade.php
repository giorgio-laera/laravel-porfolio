@extends('layouts.projects')

@section('title', $project->name)

@section('content')

    <h2 class="text-primary">Cliente: {{ $project->client }}</h2>
    <section class="d-flex gap-2">
    <a class="btn btn-outline-warning" href="{{route("project.edit", $project)}}">Modifica</a>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Elimina
</button>

    
    </section>
    <span>Tipo: {{$project->type['name']}}</span> <br>
    <span>{{ $project->start_date }}</span>
    <span>{{ $project->end_date }}</span>
    <p>{{ $project->description }}</p>
    <a class="btn btn-outline-primary" href="{{route("project.index")}}">Torna ai progetti</a>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route("project.destroy", $project)}}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-outline-danger" type="submit" value="Elimina definitivamente">
    </form>
      </div>
    </div>
  </div>
</div>
@endsection
