@extends('templates.admin')

@section('title', 'Liste des salles')

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
        @foreach($rooms as $room)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminRoomDestroy', ['id'=>$room->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminRoomEdit', ['id'=>$room->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminRoomShow', ['id'=>$room->id])}}">Afficher</a>
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
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection