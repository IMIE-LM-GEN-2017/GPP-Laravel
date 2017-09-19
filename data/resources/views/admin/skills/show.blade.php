@extends('templates.admin')

@section('title', 'Liste des Utilisateurs')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminSkillDestroy', ['id'=>$skill->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminSkillEdit', ['id'=>$skill->id]) }}" class="waves-effect waves-light btn">Editer</a>
        </td>
        <td>
            {{$skill->name}}
        </td>
        <td>
            {{$skill->description}}
        </td>
        </tbody>
    </table>
@endsection