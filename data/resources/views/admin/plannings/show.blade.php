@extends('templates.admin')

@section('title', 'Planning' . $planning->id)

@section('contentadmin')
    <a href="{{ route('AdminPlanningDestroy', ['id'=>$planning->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminPlanningEdit', ['id'=>$planning->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{$planning->id}}
        {{$planning->username}}
        {{$planning->promotion_name}}
        {{$planning->lesson_id}}
        {{$planning->description}}
        {{$planning->start_end}}
        {{$planning->end_date}}
    </pre>
@endsection