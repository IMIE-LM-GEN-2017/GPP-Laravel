@extends('templates.admin')

@section('title', 'Liste des utilisateurs')

@section('content')

    <table class="highlight responsive-table">
        <thead>
        <tr>
            <th>Actions</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Début</th>
            <th>Fin</th>
            <th>ID Centre</th>
        </tr>
        </thead>

        <tbody>
        @foreach($promotions as $promotion)
            <tr>
                <td>
                    <a class="waves-effect waves-light btn" href="{{route('AdminPromotionDestroy', ['id'=>$promotion->id])}}">Supprimer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminPromotionEdit', ['id'=>$promotion->id])}}">Editer</a>
                    <a class="waves-effect waves-light btn" href="{{route('AdminPromotionShow', ['id'=>$promotion->id])}}">Afficher</a>
                </td>
                <td>
                    {{$promotion->name}}
                </td>
                <td>
                    {{$promotion->description}}
                </td>
                <td>
                    {{$promotion->start_date}}
                </td>
                <td>
                    {{$promotion->end_date}}
                </td>
                <td>
                    {{$promotion->center_id}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection