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
            <th>Genre</th>
            <th>Métier</th>
            <th>Rôle</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('AdminUserDestroy', ['id'=>$user->id])}}">Supprimer</a>
                    <a href="{{route('AdminUserEdit', ['id'=>$user->id])}}">Editer</a>
                    <a href="{{route('AdminUserShow', ['id'=>$user->id])}}">Afficher</a>
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
                    {{$user->gender}}
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