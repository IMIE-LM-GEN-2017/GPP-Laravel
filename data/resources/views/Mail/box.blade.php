@extends('templates.menuhaut')

@section('title', 'Contact')

@section('content')

    <h2>Boîte mail</h2>

    <div class="monmenu">
        <ul>
            <div class="m1">
                <a class="waves-effect waves-light btn-large red" href="{{route('FormContact')}}">Envoie de mail</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large orange" href="{{route('SendContact')}}">Réception de mail</a>
            </div>
        </ul>
    </div>
@endsection