@extends('layouts.app')
@section('title', "La liste complète" )
@section('main')
    <h1 class="ml-1">Les plus belles chaussures du monde</h1>
    <div class="row justify-content-center">
        @foreach ($chaussures as $chaussure)
            <section class="col-md-4 pb-3">
                <div class="card">
                    <img class="card-img-top p-2" src="/img/shoes.jpg" height="" width="auto" />
                    <ul class="card-block list-unstyled">
                        <li class="pull-left">
                            <a href="{{ route('chaussures.show', $chaussure) }}">
                                {{ $chaussure->name }}
                            </a>
                        </li>
                        <li class="pull-right">
                            <a href="{{ route('chaussures.edit', $chaussure) }}"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                        </li>
                        <li class="pull-right">
                            <form action="{{ route('chaussures.destroy', $chaussure) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="fa fa-trash btn-link text-danger" type="submit"></button>
                          </form>
                        </li>
                    </ul>
                </div>
            </section>
        @endforeach
        {{ $chaussures->links() }}
    </div>
@endsection
