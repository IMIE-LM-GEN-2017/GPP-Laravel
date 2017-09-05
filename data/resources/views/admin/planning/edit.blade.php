@extends('templates.admin')

@section('title', 'Edition d\'un planning')

@section('content')
    {!! Form::model($planning, ['route'=>['AdminPlanningUpdate', $planning->id]]) !!}

    {!! Form::label('promotion_id') !!}
    {!! Form::text('promotion_id') !!}

    {!! Form::label('room_id') !!}
    {!! Form::text('room_id') !!}

    {!! Form::label('start_date') !!}
    {!! Form::text('start_date') !!}

    {!! Form::label('end_date') !!}
    {!! Form::text('end_date') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection