@extends('templates.admin')

@section('title', 'Liste des Utilisateurs')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>ID Utilisateur</th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminTodolistDestroy', ['id'=>$todolist->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminTodolistEdit', ['id'=>$todolist->id]) }}" class="waves-effect waves-light btn">Editer</a>
        </td>
        <td>
            {{$todolist->name}}
        </td>
        <td>
            {{$todolist->user_id}}
        </td>
        </tbody>
    </table>
@endsection