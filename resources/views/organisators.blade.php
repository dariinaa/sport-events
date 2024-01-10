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
@endsection
