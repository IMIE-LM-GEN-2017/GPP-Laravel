@extends('templates.admin')
@section('title', 'Interface administrateur')

@section('contentadmin')
    <div class="monmenu">
        <ul>
            <div class="m1">
                <a class="waves-effect waves-light btn-large green" href="{{ route('PlanningIndex') }}">Mon Planning</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large orange" href="{{ route('AdminPlanningIndex') }}">Tous les Plannings</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large red" href="{{ route('AdminTodolistIndex') }}">To Do Lists</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large green"
                   href="{{ route('AdminUserIndex') }}">Utilisateurs</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large blue"
                   href="{{ route('AdminPresenceIndex') }}">Présences</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large purple" href="{{ route('FormularyContact') }}">Contact</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large white black-text" href="{{ route('AdminRegister') }}">Enregistrement</a>
            </div>
            <div class="m1">
                <form>
                    <!--Logout-->
                    <a class="m1 waves-effect waves-light btn-large black" href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Se Déconnecter</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </form>
            </div>
        </ul>
    </div>
@endsection