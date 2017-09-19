@extends('templates.admin')

@section('title', 'Liste des Tâches')

@section('content')

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Statut</th>
            <th>Début</th>
            <th>Echéance</th>
            <th>Fin</th>
            <th>ID To Do List</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminTaskDestroy', ['id'=>$task->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminTaskEdit', ['id'=>$task->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminTaskShow', ['id'=>$task->id])}}">Afficher</a>
                </td>
                <td>
                    {{$task->name}}
                </td>
                <td>
                    {{$task->description}}
                </td>
                <td>
                    {{$task->status}}
                </td>
                <td>
                    {{$task->start_date}}
                </td>
                <td>
                    {{$task->due_date}}
                </td>
                <td>
                    {{$task->end_time}}
                </td>
                <td>
                    {{$task->todolist_id}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection