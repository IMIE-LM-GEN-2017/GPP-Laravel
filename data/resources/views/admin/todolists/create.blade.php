@extends('templates.admin')

@section('title', 'Nouvel utilisateur')

@section('content')
    <form action="{{route('AdminUserStore')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Prénom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Nom</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="username" type="text" class="validate">
                    <label for="username">Utilisateur</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <select name="is_teacher" class="input-field center" value="{{old('is_teacher')}}" required
                            autofocus>
                        <option value="1">Enseignant</option>
                        <option value="0">Apprenant</option>
                    </select>
                    <label>Enseignant</label>
                </div>
                <div class="input-field col s6">
                    <input id="role" type="text" class="validate">
                    <label for="role">Rôle</label>
                </div>
                <button type="submit" class="waves-effect waves-light btn">
                    Enregistrer
                </button>
            </form>
        </div>
    </form>

    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
@endsection