@extends('templates.admin')

@section('title', 'Contact ' . $contact->name)

@section('content')
    <a href="{{ route('AdminContactDestroy', ['id'=>$contact->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminContactEdit', ['id'=>$contact->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{$contact->id}}
        {{$contact->username}}
        {{$contact->is_teacher}}
        {{$contact->status}}
        {{$contact->role}}
        {{$contact->created_at}}
        {{$contact->updated_at}}
    </pre>
@endsection