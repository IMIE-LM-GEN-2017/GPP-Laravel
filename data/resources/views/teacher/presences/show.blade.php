@extends('templates.admin')

@section('title', 'Membre ' . $user->username)

@section('contentadmin')
    <a href="{{ route('AdminPresenceDestroy', ['id'=>$user->id]) }}" class="waves-effect waves-light btn red">Supprimer</a>
    <a href="{{ route('AdminPresenceEdit', ['id'=>$user->id]) }}" class="waves-effect waves-light btn blue">Editer</a>

    <pre>
        {{$user->username}}
        {{$user->first_name}}
        {{$user->last_name}}
        {{$user->email}}
    </pre>
@endsection