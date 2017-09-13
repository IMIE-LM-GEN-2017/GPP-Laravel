@extends('templates.admin')
@section('title', 'Edition des listes de tâches')

@section('contentadmin')
    {!! Form::model($todolist, ['route'=>['AdminTodolistUpdate', $todolist->id]]) !!}

    {!! Form::label('Utilisateur') !!}
    {!! Form::text('username') !!}

    {!! Form::label('Promotion') !!}
    {!! Form::text('promotion_name') !!}

    {!! Form::label('Tâches') !!}
    {!! Form::text('task_name') !!}

    {!! Form::label('Date de début') !!}
    {!! Form::date('start_date') !!}

    {!! Form::label('Date de fin') !!}
    {!! Form::date('end_date') !!}

    {!! Form::label('Date d\'échéance) !!}
    {!! Form::date('due_date') !!}

    {!! Form::label('Description') !!}
    {!! Form::textarea('description') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection