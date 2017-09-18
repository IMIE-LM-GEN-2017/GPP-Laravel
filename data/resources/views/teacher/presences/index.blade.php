@extends('templates.default')

@section('title', 'Liste des présences')

@section('content')
    <table class="responsive-table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>Membre</td>
            <td>Présence</td>
            <td>Excuses</td>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('TeacherPresenceDestroy', ['id'=>$user->id])}}">Supprimer</a>
                    <a href="{{route('TeacherPresenceEdit', ['id'=>$user->id])}}">Editer</a>
                    <a href="{{route('TeacherPresenceShow', ['id'=>$user->id])}}">Afficher</a>
                </td>
                <td>{{$user->username}}</td>
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
@endsection