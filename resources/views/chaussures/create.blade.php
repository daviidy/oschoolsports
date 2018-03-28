@extends('layouts.app')
@section('main')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Ajouter une nouvelle chaussure</h1>

    <form enctype="multipart/form-data" class="card" action="{{ route('chaussures.store') }}" method="post">
      <div class="card-block">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nom: </label>
          <input type="text" class="form-control" name="name" placeholder="Nom de la chaussure">
        </div>
        <div class="form-group">
          <label for="city">Auteur:</label>
          <input type="text" class="form-control" name="auteur" placeholder="Auteur">
        </div>
        <div class="form-group">
          <label for="website">Site web</label>
          <input type="text" class="form-control" name="website" placeholder="Site web">
        </div>
        <button type="submit" class="btn btn-primary">
          Créer
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
