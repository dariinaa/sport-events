@extends('layouts.app')

@section('content')

<head><link rel="stylesheet" href="assets/myStyle.css" /></head>

<div class="data-table-container">
    <h1>{{$title}}</h1>
	
<form action="{{ route('sports.index') }}" method="get" class="search-form">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sort_direction">Sort Direction (sorted by creation date):</label>
            <select name="sort_direction" id="sort_direction" class="form-control">
                <option value="asc" {{ request('sort_direction') === 'asc' ? 'selected' : '' }}>Ascending</option>
                <option value="desc" {{ request('sort_direction') === 'desc' ? 'selected' : '' }}>Descending</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sort</button>
</form>

	<table>
        <thead>
            <tr>
                <th>Sport Name</th>
                <th>Sport Image</th>
                <th>Describtion</th>
				<th>Season</th> 
				<th>Players Count</th> 

            </tr>
        </thead>
        <tbody>
            @foreach ($sports as $sport)
                <tr>
                    <td>{{ $sport->name }}</td>
                    <td><img src="{{ $sport->image }}"></td>
                    <td>{{ $sport->describtion }}</td>
                    <td>{{ $sport->season }}</td>
                    <td>{{ $sport->players_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
