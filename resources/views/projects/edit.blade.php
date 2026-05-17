@extends('layouts.projects')

@section('title', 'Modifica il progetto')

@section('content')

    <form class="container" action="{{route("project.update", $project)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome progetto</label>
            <input type="text" id="name" name="name" value="{{$project->name}}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="client">Cliente</label>
            <input type="text" id="client" name="client" value="{{ $project->client}}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="start_date">Data inizio progetto</label>
            <input type="date" id="start_date" name="start_date" value="{{$project->start_date }}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="end_date">Data fine progetto</label>
            <input type="date" id="end_date" name="end_date" value="{{ $project->end_date}}">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description"  rows="5">{{ $project->description}}</textarea>
        </div>
        <a class="btn btn-outline-secondary" href="{{route("project.index")}}">Annulla</a>
        <input class="btn btn-outline-primary" type="submit" value="Modifica progetto">
    </form>