@extends('templates.admin')

@section('title', 'Liste des Utilisateurs')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Début</th>
            <th>Fin</th>
            <th>ID Centre</th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminPromotionDestroy', ['id'=>$promotion->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminPromotionEdit', ['id'=>$promotion->id]) }}" class="waves-effect waves-light btn">Editer</a>
        </td>
        <td>
            {{$promotion->name}}
        </td>
        <td>
            {{$promotion->description}}
        </td>
        <td>
            {{$promotion->start_date}}
        </td>
        <td>
            {{$promotion->end_date}}
        </td>
        <td>
            {{$promotion->center_id}}
        </td>
        </tbody>
    </table>
@endsection