@extends('templates.admin')

@section('title', 'Liste des utilisateurs')

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
        @foreach($skills as $skill)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminSkillDestroy', ['id'=>$skill->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminSkillEdit', ['id'=>$skill->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminSkillShow', ['id'=>$skill->id])}}">Afficher</a>
                </td>
                <td>
                    {{$skill->name}}
                </td>
                <td>
                    {{$skill->description}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection