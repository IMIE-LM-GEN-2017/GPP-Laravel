@extends('templates.teacher')

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
            <a href="{{ route('TeacherTodolistDestroy', ['id'=>$todolist->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('TeacherTodolistEdit', ['id'=>$todolist->id]) }}" class="waves-effect waves-light btn">Editer</a>
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