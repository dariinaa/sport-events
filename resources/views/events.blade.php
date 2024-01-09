<!-- resources/views/events.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>
<body>
    <h1>Event Information</h1>

    @foreach ($events as $event)
        <div>
            <h2>{{ $event->name }}</h2>
            <p><strong>Location:</strong> {{ $event->location }}</p>
            <p><strong>Beginning Date:</strong> {{ $event->beginning_date }}</p>
            <p><strong>End Date:</strong> {{ $event->end_date }}</p>
            <p><strong>Duration (minutes):</strong> {{ $event->duration_minutes }}</p>
            <hr>
        </div>
    @endforeach
</body>
</html>
