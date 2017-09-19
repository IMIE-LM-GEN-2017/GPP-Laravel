@extends('templates.teacher')

@section('title', 'Liste des Cours')

@section('content')

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Note</th>
            <th>ID Utilisateur</th>
            <th>ID Promotion</th>
            <th>ID Skill</th>
        </tr>
        </thead>

        <tbody>
        @foreach($lessons as $lesson)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('TeacherLessonDestroy', ['id'=>$lesson->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('TeacherLessonEdit', ['id'=>$lesson->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('TeacherLessonShow', ['id'=>$lesson->id])}}">Afficher</a>
                </td>
                <td>
                    {{$lesson->start_time}}
                </td>
                <td>
                    {{$lesson->end_time}}
                </td>
                <td>
                    {{$lesson->note}}
                </td>
                <td>
                    {{$lesson->user_id}}
                </td>
                <td>
                    {{$lesson->promotion_id}}
                </td>
                <td>
                    {{$lesson->skill_id}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection