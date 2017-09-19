@extends('templates.admin')

@section('title', 'Liste des Présences')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Présence</th>
            <th>Excuse</th>
            <th>ID Cours</th>
            <th>ID Utilisateur</th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminPresenceDestroy', ['id'=>$presence->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminPresenceEdit', ['id'=>$presence->id]) }}" class="waves-effect waves-light btn">Editer</a>
        </td>
        <td>
            {{$presence->is_present}}
        </td>
        <td>
            {{$presence->excuse}}
        </td>
        <td>
            {{$presence->lesson_id}}
        </td>
        <td>
            {{$presence->user_id}}
        </td>
        </tbody>
    </table>
@endsection