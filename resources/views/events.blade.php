@extends('layouts.app')

@section('content')
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            border-bottom: 1px solid #ddd;
        }

        td {
            border-bottom: 1px solid #ddd;
        }
</style>
    <h1>{{$title}}</h1>

<form action="{{ route('events.index') }}" method="get">
    <label for="name">Event Name:</label>
    <input type="text" name="name" id="name" value="{{ request('name') }}">
    
    <label for="beginning_date">Start Date:</label>
    <input type="date" name="beginning_date" id="beginning_date" value="{{ request('beginning_date') }}">
    
    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}">

    <label for="organisators">Organisators:</label>
    <input type="text" name="organisators" id="organisators" value="{{ request('organisators') }}">

    <label for="sports">Sports:</label>
    <input type="text" name="sports" id="sports" value="{{ request('sports') }}">

    <button type="submit">Search</button>
</form>
	
    <table>
        <thead>
            <tr>
                <th>Event</th>
                <th>Location</th>
                <th>Beginning Date</th>
                <th>End Date</th>
                <th>Duration (minutes)</th>
				<th>Organisators</th> 
				<th>Sports</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->beginning_date }}</td>
                    <td>{{ $event->end_date }}</td>
                    <td>{{ $event->duration_minutes }}</td>
					<td>
                    @foreach($event->organisators as $organisator)
                        {{ $organisator->name }}<br>
                    @endforeach
					</td>
					<td>
                    @foreach($event->sports as $sport)
                        {{ $sport->name }}<br>
                    @endforeach
					</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
