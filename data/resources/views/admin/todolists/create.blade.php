@extends('templates.admin')

@section('title', 'Nouvelle Todolist')

@section('content')
    <form action="{{route('AdminTodolistStore')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="user_id" type="text" class="validate">
                        <label for="user_id">ID Utilisateur</label>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn">
                    Enregistrer
                </button>
            </form>
        </div>
    </form>
    
@endsection