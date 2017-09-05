@extends('templates.admin')

@section('title', 'Presence ' . $presence->name)

@section('content')
    <a href="{{ route('AdminPresenceDestroy', ['id'=>$presence->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminPresenceEdit', ['id'=>$presence->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{$presence->id}}
        {{$presence->username}}
        {{$presence->is_teacher}}
        {{$presence->status}}
        {{$presence->role}}
        {{$presence->created_at}}
        {{$presence->updated_at}}
    </pre>
@endsection