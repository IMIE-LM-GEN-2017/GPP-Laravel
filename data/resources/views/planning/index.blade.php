@extends('templates.default')
@section('title', 'Planning')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link href="public/css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css'/>
</head>

<body>

<div id='calendar'></div>

<script src='lib/jquery.min.js'></script>
<script src='lib/moment.min.js'></script>
<script src='fullcalendar/fullcalendar.js'></script>
<script>
    $(document).ready(function () {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            // put your options and callbacks here
        })

    });</script>
</body>

@endsection