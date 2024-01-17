@extends('layouts.app')

@section('content')

<head><link rel="stylesheet" href="assets/myStyle.css" /></head>

<div class="data-table-container">
    <h1>{{$title}}</h1>

<form action="{{ route('events.index') }}" method="get" class="search-form">

@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Event Name:</label>
            <input type="text" name="name" id="name" value="{{ request('name') }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="beginning_date">Start Date:</label>
            <input type="date" name="beginning_date" id="beginning_date" value="{{ request('beginning_date') }}" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="organisators">Organisators:</label>
            <input type="text" name="organisators" id="organisators" value="{{ request('organisators') }}" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sports">Sports:</label>
            <input type="text" name="sports" id="sports" value="{{ request('sports') }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="sort_direction">Sort Direction (sorted by creation date):</label>
            <select name="sort_direction" id="sort_direction" class="form-control">
                <option value="asc" {{ request('sort_direction') === 'asc' ? 'selected' : '' }}>Ascending</option>
                <option value="desc" {{ request('sort_direction') === 'desc' ? 'selected' : '' }}>Descending</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Search</button>

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
</div>
@endsection
