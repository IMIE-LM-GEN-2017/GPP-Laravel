@extends('templates.admin')
@section('title', 'Création des plannings')

@section('contentadmin')
    <!--Planning-->
    {!! Form::open(['route'=>'AdminPlanningStore']) !!}

    {!! Form::label('Salle') !!}
    {!! Form::text('room_name') !!}

    {!! Form::label('Utilisateur') !!}
    {!! Form::text('username') !!}

    {!! Form::label('Promotion') !!}
    {!! Form::text('promotion_name') !!}

    {!! Form::label('Cours') !!}
    {!! Form::text('lesson_id') !!}

    {!! Form::label('Descritpion') !!}
    {!! Form::textarea('description') !!}

    {!! Form::label('Date de début') !!}
    {!! Form::date('start_date') !!}

    {!! Form::label('Date de fin') !!}
    {!! Form::date('end_date') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection