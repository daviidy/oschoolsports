@extends('layouts.app')
@section('title', "Modifier $chaussure->name" )
@section('main')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Modifier</h1>

    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $chaussure->name }}</h1>
        <form enctype="multipart/form-data" action="{{ url('chaussures', $chaussure) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" value="{{ $chaussure->name }}">
          </div>
          <div class="form-group">
            <label for="city">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="{{ $chaussure->auteur }}">
          </div>
          <div class="form-group">
            <label for="website">Site web</label>
            <input type="text" class="form-control" name="website" value="{{ $chaussure->website }}">
          </div>
          <button type="submit" class="btn btn-primary">
            Mettre à jour les infos
          </button>
        </form>
      </div>
    </div>
  </div>

</div>

@endsection
