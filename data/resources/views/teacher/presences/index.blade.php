@extends('templates.teacher')

@section('title', 'Liste des Présences')

@section('content')

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Présence</th>
            <th>Excuses</th>
            <th>ID Cours</th>
            <th>ID Utilisateur</th>
        </tr>
        </thead>

        <tbody>
        @foreach($presences as $presence)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('TeacherPresenceDestroy', ['id'=>$presence->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('TeacherPresenceEdit', ['id'=>$presence->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('TeacherPresenceShow', ['id'=>$presence->id])}}">Afficher</a>
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
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection