@extends('templates.admin')
@section('title', 'Edition des Présences')

@section('contentadmin')
    <form action="{{route('AdminPresenceUpdate')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <select name="is_present" class="input-field center" value="{{old('is_present')}}" required
                            autofocus>
                        <option value="1">Présent(e)</option>
                        <option value="0">Absent(e)</option>
                    </select>
                    <label>Présence</label>
                    <div class="input-field col s6">
                        <input id="excuse" type="text" class="validate">
                        <label for="excuse">Excuse</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="lesson_id" type="text" class="validate">
                    <label for="lesson_id">ID Cours</label>
                </div>
                <div class="input-field col s6">
                    <input id="user_id" type="text" class="validate">
                    <label for="user_id">ID Utilisateur</label>
                </div>
            </form>
        </div>
    </form>
    <button type="submit" class="waves-effect waves-light btn">
        Enregistrer
    </button>

    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
@endsection