@extends('templates.admin')

@section('title', 'Liste des utilisateurs')

@section('content')

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Utilisateur</th>
            <th>Adresse Mail</th>
            <th>Enseignant</th>
            <th>Rôle</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminUserDestroy', ['id'=>$user->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminUserEdit', ['id'=>$user->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminUserShow', ['id'=>$user->id])}}">Afficher</a>
                </td>
                <td>
                    {{$user->first_name}}
                </td>
                <td>
                    {{$user->last_name}}
                </td>
                <td>
                    {{$user->username}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    {{$user->is_teacher}}
                </td>
                <td>
                    {{$user->role}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection