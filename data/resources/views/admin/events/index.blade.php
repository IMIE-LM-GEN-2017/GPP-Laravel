@extends('templates.admin')

@section('title', 'Liste des utilisateurs')

@section('content')

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Début</th>
            <th>Fin</th>
            <th>ID Salle</th>
        </tr>
        </thead>

        <tbody>
        @foreach($events as $event)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminEventDestroy', ['id'=>$event->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminEventEdit', ['id'=>$event->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminEventShow', ['id'=>$event->id])}}">Afficher</a>
                </td>
                <td>
                    {{$event->title}}
                </td>
                <td>
                    {{$event->description}}
                </td>
                <td>
                    {{$event->start}}
                </td>
                <td>
                    {{$event->end}}
                </td>
                <td>
                    {{$event->room_id}}
                </td>
        @endforeach
        </tbody>
    </table>

@endsection