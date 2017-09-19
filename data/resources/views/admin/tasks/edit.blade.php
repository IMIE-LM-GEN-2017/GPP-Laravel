@extends('templates.admin')
@section('title', 'Edition des Tâches')

@section('content')
    <form action="{{route('AdminTaskUpdate')}}" method="POST" }>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="description" type="text" class="validate">
                        <label for="description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <select name="status" class="input-field center" value="{{old('status')}}" required
                            autofocus>
                        <option value="1">En ligne</option>
                        <option value="0">Hors ligne</option>
                    </select>
                    <label>Connection</label>
                </div>
                <div class="input-field col s6">
                    <input id="start_date" type="datetime-local" class="validate">
                    <label for="start_date">Début</label>
                </div>
                <div class="input-field col s6">
                    <input id="due_date" type="datetime-local" class="validate">
                    <label for="due_date">Echéance</label>
                </div>
                <div class="input-field col s6">
                    <input id="end_time" type="datetime-local" class="validate">
                    <label for="end_time">Fin</label>
                </div>
                <div class="input-field col s6">
                    <input id="todolist_id" type="number" class="validate">
                    <label for="todolist_id">ID To Do List</label>
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