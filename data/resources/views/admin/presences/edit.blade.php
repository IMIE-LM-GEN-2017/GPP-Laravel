@extends('templates.admin')

@section('title', 'Edition d\'une liste de présence')

@section('content')
    {!! Form::model($contact, ['route'=>['AdminPresenceUpdate', $contact->id]]) !!}

    {!! Form::label('first_name') !!}
    {!! Form::text('first_name') !!}

    {!! Form::label('last_name') !!}
    {!! Form::text('last_name') !!}

    {!! Form::label('promotion_id') !!}
    {!! Form::text('promorion_id') !!}

    {!! Form::label('is_teacher') !!}
    {!! Form::text('is_teacher') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection