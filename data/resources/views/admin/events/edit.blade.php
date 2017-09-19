@extends('templates.admin')
@section('title', 'Edition des évènements')

@section('content')
    <form action="{{route('AdminEventUpdate')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="title" type="text" class="validate">
                        <label for="title">Titre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="description" type="text" class="validate">
                        <label for="description">Description</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="start" type="text" class="validate">
                        <label for="start">Début</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="end" type="text" class="validate">
                    <label for="end">Fin</label>
                </div>
                <div class="input-field col s6">
                    <input id="room_id" type="text" class="validate">
                    <label for="room_id">ID Salle</label>
                </div>
                <button type="submit" class="waves-effect waves-light btn">
                    Enregistrer
                </button>
            </form>
        </div>
    </form>
    
@endsection