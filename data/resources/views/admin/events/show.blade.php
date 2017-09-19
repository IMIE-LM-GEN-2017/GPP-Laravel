@extends('templates.admin')

@section('title', 'Liste des Evènements')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>
                Titre
            </th>
            <th>
                Description
            </th>
            <th>
                Début
            </th>
            <th>
                Fin
            </th>
            <th>
                ID Salle
            </th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminEventDestroy', ['id'=>$event->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminEventEdit', ['id'=>$event->id]) }}" class="waves-effect waves-light btn">Editer</a>
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
        </tbody>
    </table>
@endsection