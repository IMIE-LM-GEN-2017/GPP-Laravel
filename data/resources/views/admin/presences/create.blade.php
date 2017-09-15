@extends('templates.admin')

@section('title', 'Nouvel utilisateur')

@section('contentadmin')
    {!! Form::open(['route'=>'AdminPresenceStore']) !!}

    {!! Form::label('username') !!}
    {!! Form::text('username') !!}

    {!! Form::label('email') !!}
    {!! Form::text('email') !!}

    {!! Form::label('first_name') !!}
    {!! Form::text('first_name') !!}

    {!! Form::label('last_name') !!}
    {!! Form::text('last_name') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection