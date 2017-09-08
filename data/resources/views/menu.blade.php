@extends('templates.default')
@section('title', 'Menu')

@section('content')
    <form method="GET" action="{{ route('menu') }}">
        <h2>Le Gestionnaire de Planning et de Projets</h2>
        <div class="monmenu">
            <ul>
                <div class="m1">
                    <a class="waves-effect waves-light btn-large green" href="planning.php">Planning</a>
                </div>
                <div class="m1">
                    <a class="waves-effect waves-light btn-large red" href="tdl.php">To Do List</a>
                </div>
                <div class="m1">
                    <a class="waves-effect waves-light btn-large blue" href="presence.php">Présence</a>
                </div>
                <div class="m1">
                    <a class="waves-effect waves-light btn-large purple" href="contact.php">Contact</a>
                </div>
                <div class="m1">
                    <a class="waves-effect waves-light btn-large black" href="logout.php">Déconnexion</a>
                </div>
            </ul>
        </div>
    </form>
@endsection