@extends('templates.admin')

@section('title', 'Liste des utilisateurs')

@section('contentadmin')
    <table class="responsive-table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>Utilisateurs</td>
            <td>Promotion</td>
            <td>Tâches</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Date d'échéance</td>
            <td>Description</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('AdminUserDestroy', ['id'=>$user->id])}}">Supprimer</a>
                    <a href="{{route('AdminUserEdit', ['id'=>$user->id])}}">Editer</a>
                    <a href="{{route('AdminUserShow', ['id'=>$user->id])}}">Afficher</a>
                </td>
                <td>{{$todolist->username}}</td>
                <td>{{$todolist->promotion_name}}</td>
                <td>{{$todolist->task_name}}</td>
                <td>{{$todolist->start_date}}</td>
                <td>{{$todolist->end_date}}</td>
                <td>{{$todolist->due_date}}</td>
                <td>{{$todolist->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection