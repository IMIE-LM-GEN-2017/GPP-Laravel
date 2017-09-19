@extends('templates.teacher')

@section('title', 'Nouvelle promotion')

@section('content')
    <form action="{{route('TeacherPromotionStore')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Nom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="description" type="text" class="validate">
                        <label for="description">Description</label>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="start_date" type="date" class="validate">
                    <label for="start_date">Début</label>
                </div>
                <div class="input-field col s6">
                    <input id="end_date" type="date" class="validate">
                    <label for="end_date">Fin</label>
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