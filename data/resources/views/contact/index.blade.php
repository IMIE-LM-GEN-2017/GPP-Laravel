@extends('templates.default')

@section('title', 'Liste des contacts')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>username</td>
            <td>email</td>
            <td>is_teacher</td>
            <td>created</td>
            <td>updated</td>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>
                    <a href="{{route('ContactShow', ['id'=>$contact->id])}}">Afficher</a>
                </td>
                <td>{{$contact->id}}</td>
                <td>{{$contact->username}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->is_teacher}}</td>
                <td>{{$contact->created_at}}</td>
                <td>{{$contact->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection