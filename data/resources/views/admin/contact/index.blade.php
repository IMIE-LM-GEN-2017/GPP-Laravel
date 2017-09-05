@extends('templates.admin')

@section('title', 'Liste des contacts')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>username</td>
            <td>email</td>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>
                    <a href="{{route('AdminContactDestroy', ['id'=>$contact->id])}}">Supprimer</a>
                    <a href="{{route('AdminContactEdit', ['id'=>$contact->id])}}">Editer</a>
                    <a href="{{route('AdminContactShow', ['id'=>$contact->id])}}">Afficher</a>
                </td>
                <td>{{$contact->id}}</td>
                <td>{{$contact->username}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->created_at}}</td>
                <td>{{$contact->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection