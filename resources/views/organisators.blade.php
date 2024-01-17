@extends('layouts.app')

@section('content')

<head><link rel="stylesheet" href="assets/myStyle.css" /></head>

<div class="data-table-container">
    <h1>{{$title}}</h1>
	
<form action="{{ route('organisators.index') }}" method="get" class="search-form">
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
                <th>Organisator Name</th>
                <th>Phone Number</th>
                <th>Email</th>
				<th>Website</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($organisators as $organisator)
                <tr>
                    <td>{{ $organisator->name }}</td>
                    <td>{{ $organisator->phone_number }}</td>
                    <td>{{ $organisator->email }}</td>
                    <td>{{ $organisator->website }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
