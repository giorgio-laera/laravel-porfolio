@extends('layouts.projects')

@section('title','i miei post')

@section('content')
<table>
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Cliente</th>
            <th>Inizio progetto</th>
            <th>Fine progetto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th>{{$project->name}}</th>
                <th>{{$project->client}}</th>
                <th>{{$project->start_date}}</th>
                <th>{{$project->end_date}}</th>
                <th><a href="project/{{$project->id}}">visualizza</a></th>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection