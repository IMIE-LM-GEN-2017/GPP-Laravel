@extends('templates.default')
@section('title', 'Menu')

@section('content')
    <div class="titrem">
        <h2>Le Gestionnaire de Planning et de Projets</h2>
    </div>
    <div class="monmenu">
        <ul>
            <div class="m1">
                <a class="waves-effect waves-light btn-large green" href="{{route('PlanningIndex')}}">Planning</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large red" href="{{route('TodolistIndex')}}">To Do List</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large blue" href="{{route('AdminPresenceIndex')}}">Présence</a>
            </div>
            <div class="m1">
                <a class="waves-effect waves-light btn-large purple" href="{{ route('IndexContact') }}">Contact</a>
            </div>

            <div class="m1">
                <!--Logout-->
                <a class="m1 waves-effect waves-light btn-large black" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Se Déconnecter</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </ul>
    </div>
@endsection
