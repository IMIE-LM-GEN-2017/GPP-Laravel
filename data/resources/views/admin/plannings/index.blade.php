@extends('templates.admin')

@section('title', 'Plannings')

@section('content')
    <table class="responsive-table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>Nom d'utilisateur</td>
            <td>Promotion</td>
            <td>Début</td>
            <td>Fin</td>
            <td>Cours</td>
            <td>Description</td>
        </tr>
        </thead>
        <tbody>
        @foreach($plannings as $planning)
            <tr>
                <td>
                    <a href="{{route('AdminPlanningDestroy', ['id'=>$planning->id])}}">Supprimer</a>
                    <a href="{{route('AdminPlanningEdit', ['id'=>$planning->id])}}">Editer</a>
                    <a href="{{route('AdminPlanningShow', ['id'=>$planning->id])}}">Afficher</a>
                </td>
                <td>{{$planning->username}}</td>
                <td>{{$planning->promotion_id}}</td>
                <td>{{$planning->start_date}}</td>
                <td>{{$planning->end_date}}</td>
                <td>{{$planning->lesson_id}}</td>
                <td>{{$planning->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection