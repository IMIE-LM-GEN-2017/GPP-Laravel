@extends('templates.admin')

@section('title', 'Liste des Centres')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Actions</th>
            <th>
                Nom
            </th>
            <th>
                Adresse
            </th>
            <th>
                Code postal
            </th>
            <th>
                Ville
            </th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('AdminCenterDestroy', ['id'=>$center->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('AdminCenterEdit', ['id'=>$center->id]) }}" class="waves-effect waves-light btn">Editer</a>
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
        </tbody>
    </table>
@endsection