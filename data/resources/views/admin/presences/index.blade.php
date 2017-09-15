@extends('templates.admin')

@section('title', 'Liste des présences')

@section('contentadmin')
    <form action="{{$presences->is_present}}" method="POST">
        <table class="responsive-table">
            <thead>
            <tr>
                <td>Actions</td>
                <td>Username</td>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Email</td>
                <td>Présence</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{route('AdminPresenceDestroy', ['id'=>$user->id])}}">Supprimer</a>
                        <a href="{{route('AdminPresenceEdit', ['id'=>$user->id])}}">Editer</a>
                        <a href="{{route('AdminPresenceShow', ['id'=>$user->id])}}">Afficher</a>
                    </td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <select class="browser-default">
                            <option value="" disabled selected>Choisir</option>
                            <option value="0">Absent(e)</option>
                            <option value="1">Présent(e)</option>
                        </select>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="envoieusers">
            <button type="submit" class="waves-effect waves-light btn green">
                Envoyer la liste
            </button>
        </div>
    </form>
@endsection