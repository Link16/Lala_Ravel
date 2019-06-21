@extends('layouts.pianoTemplate')

@section('content')
    <h1>Vous pouvez créer une fiche piano</h1>
    <br>
    <form method="POST" action="{{ route('store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nom du piano</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Veuillez entrer le nom du piano, svp">
        <small id="name" class="form-text text-muted">You'll never modify alone!</small>
    </div>
    <div class="form-group">
        <label for="mark">Marque du piano</label>
        <input type="text" class="form-control" name="mark" id="mark" placeholder="Veuillez entrer la marque du piano, svp">
        <small id="mark" class="form-text text-muted">You'll never modify alone!</small>
    </div>
    <div class="form-group">
        <label for="color">Couleur du piano</label>
        <input type="text" class="form-control" name="color" id="color" placeholder="Veuillez entrer la couleur du piano, svp">
        <small id="color" class="form-text text-muted">You'll never modify alone!</small>
    </div>
    <div class="form-group">
        <label for="model">Modèle du piano</label>
        <input type="text" class="form-control" name="model" id="model" placeholder="Veuillez préciser le modèle, svp">
        <small id="model" class="form-text text-muted">You'll never modify alone!</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection