@extends('templates.admin')
@section('title', 'Création des utilisateurs')

@section('contentadmin')
    <!--User-->
    {!! Form::open(['route'=>'AdminUserStore']) !!}

    {!! Form::label('Prénom') !!}
    {!! Form::text('first_name') !!}

    {!! Form::label('Nom') !!}
    {!! Form::text('last_name') !!}

    {!! Form::label('Utilisateur') !!}
    {!! Form::text('username') !!}

    {!! Form::label('Email') !!}
    {!! Form::date('email') !!}

    {!! Form::label('Sexe') !!}
    {!! Form::text('gender') !!}

    {!! Form::label('Mot de passe') !!}
    {!! Form::password('password') !!}

    {!! Form::label('Enseignant ou Apprenant') !!}
    {!! Form::boolean('is_teacher') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection