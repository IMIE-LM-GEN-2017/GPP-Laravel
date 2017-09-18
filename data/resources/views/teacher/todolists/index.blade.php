@extends('templates.admin')

@section('title', 'Liste des tâches')

@section('contentadmin')
    <table class="responsive-table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>Utilisateurs</td>
            <td>Promotion</td>
            <td>Nom des tâches</td>
            <td>Début des tâches</td>
            <td>Fin des tâches</td>
            <td>Date d'échéance</td>
            <td>Description</td>
        </tr>
        </thead>
        <tbody>
        @foreach($todolists as $todolist)
            <tr>
                <td>
                    <a href="{{route('AdminTodolistDestroy', ['id'=>$todolist->id])}}">Supprimer</a>
                    <a href="{{route('AdminTodolistEdit', ['id'=>$todolist->id])}}">Editer</a>
                    <a href="{{route('AdminTodolistShow', ['id'=>$todolist->id])}}">Afficher</a>
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