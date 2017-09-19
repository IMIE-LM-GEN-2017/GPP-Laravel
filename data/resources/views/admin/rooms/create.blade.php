@extends('templates.admin')

@section('title', 'Nouvelle salle')

@section('content')
    <form action="{{route('AdminRoomStore')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nb_seats" type="number" class="validate">
                        <label for="nb_seats">Nombre de sièges</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="center_id" type="text" class="validate">
                    <label for="center_id">ID Centre</label>
                </div>
                <button type="submit" class="waves-effect waves-light btn">
                    Enregistrer
                </button>
            </form>
        </div>
    </form>

@endsection