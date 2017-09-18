@extends('templates.admin')

@section('title', 'Liste des Utilisateurs')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Actions</th>
            <th>
                Prénom
            </th>
            <th>
                Nom
            </th>
            <th>
                Utilisateur
            </th>
            <th>
                Email
            </th>
            <th>
                Enseignant
            </th>
            <th>
                Rôle
            </th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminUserDestroy', ['id'=>$user->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminUserEdit', ['id'=>$user->id]) }}" class="waves-effect waves-light btn">Editer</a>
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
        </tbody>
    </table>
@endsection