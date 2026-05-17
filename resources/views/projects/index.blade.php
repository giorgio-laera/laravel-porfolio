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
                    <th class="p-3">{{ $project->start_date }}</th>
                    <th class="p-3">{{ $project->end_date }}</th>
                    <th class="p-3 "><a class="btn" href="{{ route('project.show', $project) }}">visualizza</a></th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
