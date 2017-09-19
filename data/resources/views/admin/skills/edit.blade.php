@extends('templates.admin')
@section('title', 'Edition des Utilisateurs')

@section('content')
    <form action="{{route('AdminUserUpdate')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Nom</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="description" type="text" class="validate">
                    <label for="description">Description</label>
                </div>
                <div class="row">
                    <button type="submit" class="waves-effect waves-light btn">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </form>

@endsection