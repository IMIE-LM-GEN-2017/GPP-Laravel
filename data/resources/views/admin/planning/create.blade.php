@extends('templates.admin')

@section('title', 'Nouveaux champs dans le planning')

@section('content')
    {!! Form::open(['route'=>'AdminContactStore']) !!}

    {!! Form::label('start_date') !!}
    {!! Form::text('start_date') !!}

    {!! Form::label('end_date') !!}
    {!! Form::text('end_date') !!}

    {!! Form::label('room_id') !!}
    {!! Form::text('room_id') !!}

    {!! Form::label('center_id') !!}
    {!! Form::text('center_id') !!}

    {!! Form::label('promotion_id') !!}
    {!! Form::text('promotion_id') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection