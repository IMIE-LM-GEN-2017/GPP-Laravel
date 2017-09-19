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
        <td>
            <a href="{{ route('AdminTaskDestroy', ['id'=>$task->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminTaskEdit', ['id'=>$task->id]) }}" class="waves-effect waves-light btn">Editer</a>
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
        </tbody>
    </table>
@endsection