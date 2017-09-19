@extends('templates.admin')
@section('title', 'Edition des Cours')

@section('contentadmin')
    <form action="{{route('AdminLessonUpdate')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="start_time" type="text" class="validate">
                        <label for="start_time">Début</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="end_time" type="text" class="validate">
                        <label for="end_time">Fin</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="note" type="text" class="validate">
                    <label for="note">Note</label>
                </div>
                <div class="input-field col s6">
                    <input id="user_id" type="text" class="validate">
                    <label for="user_id">ID Utilisateur</label>
                </div>
                <div class="input-field col s6">
                    <input id="promotion_id" type="text" class="validate">
                    <label for="promotion_id">ID Promotion</label>
                </div>
                <div class="input-field col s6">
                    <input id="skill_id" type="text" class="validate">
                    <label for="skill_id">ID Compétences</label>
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