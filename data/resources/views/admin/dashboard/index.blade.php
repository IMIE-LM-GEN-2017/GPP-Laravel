@extends('templates.admin')
@section('title', 'Administration')
@section('content')
    <div class="row">

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Utilisateurs</strong></p>
                    <a href="{{route('AdminUserIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminUserCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Centres</strong></p>
                    <a href="{{route('AdminCenterIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminCenterCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Cours</strong></p>
                    <a href="{{route('AdminLessonIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminLessonCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Présences</strong></p>
                    <a href="{{route('AdminPlanningIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminPresenceCreate')}}"
                       class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Promotions</strong></p>
                    <a href="{{route('AdminPromotionIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminPromotionCreate')}}"
                       class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>To Do list</strong></p>
                    <a href="{{route('AdminTodolistIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminTodolistCreate')}}"
                       class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Evènements</strong></p>
                    <a href="{{route('AdminEventIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminEventCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Plannings</strong></p>
                    <a href="{{route('AdminPlanningIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminPlanningCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Salles</strong></p>
                    <a href="{{route('AdminRoomIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminRoomCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Compétences</strong></p>
                    <a href="{{route('AdminSkillIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminSkillCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col s6 m3">
            <div class="card">
                <div class="card-content">
                    <p><strong>Tâches</strong></p>
                    <a href="{{route('AdminTaskIndex')}}" class="waves-effect waves-light btn btn-block">Liste</a>
                    <a href="{{route('AdminTaskCreate')}}" class="waves-effect waves-light btn btn-block light-blue">Ajouter</a>
                </div>
            </div>
        </div>

    </div>
@endsection
