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
                <th>Sport</th>
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
@endsection
