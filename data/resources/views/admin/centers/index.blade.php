@extends('templates.admin')
@section('title', 'Listes centres')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Code postal</th>
            <th>Ville</th>
        </tr>
        </thead>
        <tbody>
        @foreach($centers as $center)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminCenterDestroy', ['id'=>$center->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminCenterEdit', ['id'=>$center->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminCenterShow', ['id'=>$center->id])}}">Afficher</a>
                </td>
                <td>
                    {{$center->name}}
                </td>
                <td>
                    {{$center->address}}
                </td>
                <td>
                    {{$center->zip}}
                </td>
                <td>
                    {{$center->city}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection