@extends('templates.admin')
@section('title', 'Nouveau centre')

@section('content')
    <form action="{{route('AdminCenterStore')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="address" type="text" class="validate">
                        <label for="address">Adresse</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="zip" type="text" class="validate">
                    <label for="zip">Code postal</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="city" type="text" class="validate">
                        <label for="city">Ville</label>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">
                    Enregistrer
                </button>
            </form>
        </div>
    </form>
@endsection