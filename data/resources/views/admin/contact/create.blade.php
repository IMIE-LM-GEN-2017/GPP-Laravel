@extends('templates.admin')

@section('title', 'Nouveau contact')

@section('content')
    {!! Form::open(['route'=>'AdminContactStore']) !!}

    {!! Form::label('username') !!}
    {!! Form::text('username') !!}

    {!! Form::label('email') !!}
    {!! Form::text('email') !!}

    {!! Form::label('status') !!}
    {!! Form::text('status') !!}

    {!! Form::label('role') !!}
    {!! Form::text('role') !!}

    {!! Form::label('is_teacher') !!}
    {!! Form::text('is_teacher') !!}

    {!! Form::label('first_name') !!}
    {!! Form::text('first_name') !!}

    {!! Form::label('last_name') !!}
    {!! Form::text('last_name') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection