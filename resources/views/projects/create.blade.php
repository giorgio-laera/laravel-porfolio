@extends('layouts.projects')

@section('title', 'Modifica il progetto')

@section('content')

    <form class="container" action="{{route("project.store")}}" method="POST">
        @csrf
        <div class="form-control mb-3 d-flex flex-column">
            <label for="name">Nome progetto</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="client">Cliente</label>
            <input type="text" id="client" name="client">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="start_date">Data inizio progetto</label>
            <input type="date" id="start_date" name="start_date">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="end_date">Data fine progetto</label>
            <input type="date" id="end_date" name="end_date">
        </div>
        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description"  rows="5"></textarea>
        </div>
        <input class="btn btn-outline-primary" type="submit" value="Crea nuovo progetto">
    </form>

@endsection
