@extends('layouts.pianoTemplate')

@section('content')
    <h1>Bienvenue sur la page listant les pianos</h1>
    <div> 
        @if(session()->get('success')) 
            <div class="alert alert-success"> 
                {{ session()->get('success') }}  
            </div> 
        @endif 
    </div> 
    <table class="table">
        <thead>
            <tr>
                <th>Nom du piano</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th>Modèle</th>
                <th>Modifier</th>
                <th>Supprimer (attention, soyez sûr de vous!)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pianos as $piano)
            <tr>
                <td>{{ $piano->name }}</td>
                <td>{{ $piano->mark }}</td>
                <td>{{ $piano->color }}</td>
                <td>{{ $piano->model }}</td>
                <td><a href="{{ route('edit', $piano->id) }}"><button class="mod">Modify</button></a></td>
                <td>
                    <form method="POST" action="{{ route('delete', $piano->id) }}">
                    @csrf
                    <button class="die">Sacrifice!</button></td>
            </tr>
            @endforeach
        </tbody>   
    </table>
@endsection