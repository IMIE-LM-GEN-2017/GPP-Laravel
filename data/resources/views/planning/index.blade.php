@extends('templates.default')
@section('title', 'Planning')
@section('content')
<head>
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css'/>
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
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

</body>

@endsection