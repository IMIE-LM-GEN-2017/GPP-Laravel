@extends('templates.admin')

@section('title', 'Nouvel élément dans la liste de présence')

@section('content')
    {!! Form::open(['route'=>'AdminPresenceStore']) !!}

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