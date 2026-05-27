@extends('layouts.projects')

@section('title', 'i miei progetti')

@section('content')
    <section>
        <a class="btn btn-outline-primary" href="{{ route('project.create') }}">Aggiungi nuovo progetto</a>
    </section>

    <table>
        <thead>
            <tr class="p-3">
                <th class="p-3">Titolo</th>
                <th class="p-3">Cliente</th>
                <th class="p-3">Linguaggio</th>
                <th class="p-3">Inizio progetto</th>
                <th class="p-3">Fine progetto</th>
                <th class="p-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
           
                <tr>
                    <th class="p-3">{{ $project->name }}</th>
                    <th class="p-3">{{ $project->client }}</th>
                    <th class="p-3">{{ $project->type['name'] }}</th>
                    <th class="p-3">{{ $project->start_date }}</th>
                    <th class="p-3">{{ $project->end_date }}</th>
                    <th class="p-3 ">
                        <a class="btn btn-outline-primary" href="{{ route('project.show', $project) }}"><i
                                class="bi bi-eye"></i></a>

                        <a class="btn btn-outline-warning" href="{{ route('project.edit', $project) }}"><i
                                class="bi bi-pencil"></i></a>

                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </th>
                </tr>

            @endforeach
        </tbody>
    </table>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare il progetto?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('project.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-outline-danger" type="submit" value="Elimina definitivamente">
                                </form>
@endsection
