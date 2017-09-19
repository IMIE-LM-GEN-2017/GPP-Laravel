@extends('templates.teacher')

@section('title', 'Liste des Cours')

@section('content')
    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>
                Début
            </th>
            <th>
                Fin
            </th>
            <th>
                Note
            </th>
            <th>
                ID Utilisateur
            </th>
            <th>
                ID Promotion
            </th>
            <th>
                ID Compétences
            </th>
        </tr>
        </thead>
        <tbody>
        <td>
            <a href="{{ route('TeacherLessonDestroy', ['id'=>$lesson->id]) }}" class="waves-effect waves-light btn">Supprimer</a>
            <a href="{{ route('TeacherLessonEdit', ['id'=>$lesson->id]) }}" class="waves-effect waves-light btn">Editer</a>
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
        </tbody>
    </table>
@endsection