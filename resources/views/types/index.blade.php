@extends('layouts.types')

@section('title', 'Tutti i tipi di linguaggio disponibili')

@section('content')
    <div class="container d-flex my-3 d-flex justify-content-around">
        <a class="btn btn-outline-primary" href="{{ route('type.create') }}">Nuovo linguaggio</a>
    </div>
    <div class="container d-flex justify-content-center flex-wrap gap-3">

        @foreach ($types as $type)
            <div class="card  col-3 ">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title ">{{ $type->name }}</h5>
                    <p class="card-text ">{{ $type->description }} </p>
                    <div class="mt-auto">
                        <a href="{{ route('type.edit', $type->id) }}" class="btn btn-outline-warning">Modifica</a>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il linguaggio?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('type.destroy', $type) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-danger" type="submit" value="Elimina definitivamente">
                    </form>

                </div>

            @endsection
