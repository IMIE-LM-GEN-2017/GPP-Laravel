@extends('templates.teacher')

@section('title', 'Liste des présences')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Membres</th>
            <th>Présence</th>
            <th>Excuses</th>
        </tr>
        </thead>
        <tbody>
        @foreach($presences as $user)
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
                <td>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1"></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>

        <div class="envoieusers">
            <button type="submit" class="waves-effect waves-light btn green">
                Envoyer la liste
            </button>
        </div>
    </table>
@endsection