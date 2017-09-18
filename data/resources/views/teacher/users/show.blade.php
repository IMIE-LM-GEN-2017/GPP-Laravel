@extends('templates.admin')

@section('title', 'Liste des Utilisateurs' . $user->id)

@section('contentadmin')
    <a href="{{ route('AdminUserDestroy', ['id'=>$user->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminUserEdit', ['id'=>$useer->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{$todolist->username}}
        {{$todolist->promotion_name}}
        {{$todolist->task_name}}
        {{$todolist->start_date}}
        {{$todolist->end_date}}
        {{$todolist->due_date}}
        {{$todolist->description}}
    </pre>
@endsection