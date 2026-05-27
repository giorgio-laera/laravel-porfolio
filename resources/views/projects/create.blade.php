@extends('layouts.projects')

@section('title', 'Crea un nuovo progetto')

@section('content')

    <form class="container" action="{{ route('project.store') }}" method="POST">
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
            <label for="type_id">Linguaggio</label>
            <select class="form-select"  id="type_id" name="type_id">
                @foreach ($types as $type)
                     <option value={{$type->id}}>{{$type->name}}</option>
                @endforeach
            </select>
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
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <a class="btn btn-outline-secondary" href="{{ route('project.index') }}">Annulla</a>
        <input class="btn btn-outline-primary" type="submit" value="Crea nuovo progetto">
    </form>

@endsection
