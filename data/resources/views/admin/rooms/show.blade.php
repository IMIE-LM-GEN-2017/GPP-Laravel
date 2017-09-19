@extends('templates.admin')

@section('title', 'Liste des Utilisateurs')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>Nombre de sièges</th>
            <th>ID Centre</th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminRoomDestroy', ['id'=>$room->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminRoomEdit', ['id'=>$room->id]) }}" class="waves-effect waves-light btn">Editer</a>
        </td>
        <td>
            {{$room->name}}
        </td>
        <td>
            {{$room->nb_seats}}
        </td>
        <td>
            {{$room->center_id}}
        </td>
        </tbody>
    </table>
@endsection