@extends('templates.admin')

@section('title', 'Liste des Todolists')

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
        @foreach($todolists as $todolist)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminTodolistDestroy', ['id'=>$todolist->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminTodolistEdit', ['id'=>$todolist->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminTodolistShow', ['id'=>$todolist->id])}}">Afficher</a>
                </td>
                <td>
                    {{$todolist->name}}
                </td>
                <td>
                    {{$todolist->user_id}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection