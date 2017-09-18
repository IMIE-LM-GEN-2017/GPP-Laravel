@extends('templates.default')
@section('title', 'Planning')
@section('content')
    <head>
        <link rel='stylesheet' href='{{asset('fullcalendar/fullcalendar.css')}}'/>
        <script src='{{asset('fullcalendar/lib/jquery.min.js')}}'></script>
        <script src='{{asset('fullcalendar/lib/moment.min.js')}}'></script>
        <script src='{{asset('fullcalendar/fullcalendar.js')}}'></script>
        <script src='{{asset('fullcalendar/locale/fr.js')}}'></script>
        <script>
            $(document).ready(function () {

                // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                    // put your options and callbacks here
                })

            });
        </script>
    </head>

    <body>

    <div id='calendar'></div>

@endsection