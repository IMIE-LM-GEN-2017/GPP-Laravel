@extends('templates.admin')
@section('title', 'Editer la liste des présences')

@section('contentadmin')
    {!! Form::model($user, ['route'=>['AdminPresenceUpdate', $user->id]]) !!}

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