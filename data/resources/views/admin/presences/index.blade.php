@extends('templates.admin')

@section('title', 'Liste des présences')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>Créé le</td>
            <td>Modifié le</td>
        </tr>
        </thead>
        <tbody>
        @foreach($presences as $presence)
            <tr>
                <td>
                    <a href="{{route('AdminPresenceDestroy', ['id'=>$presence->id])}}">Supprimer</a>
                    <a href="{{route('AdminPresenceEdit', ['id'=>$presence->id])}}">Editer</a>
                    <a href="{{route('AdminPresenceShow', ['id'=>$presence->id])}}">Afficher</a>
                </td>
                <td>{{$presence->id}}</td>
                <td>{{$presence->created_at}}</td>
                <td>{{$presence->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection