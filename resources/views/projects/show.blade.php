@extends('layouts.projects')

@section('title', $project->name)

@section('content')

    <h2 class="text-primary">Cliente: {{ $project->client }}</h2>
    <section>
    <a class="btn btn-outline-warning" href="{{route("project.create")}}">Modifica</a>
    
    </section>
    <span>{{ $project->start_date }}</span>
    <span>{{ $project->end_date }}</span>
    <p>{{ $project->description }}</p>
    <a class="btn btn-outline-primary" href="{{route("project.index")}}">Torna ai progetti</a>
@endsection
