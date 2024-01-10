<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Organisator;
use App\Models\Sport;

class EventController extends Controller
{
    public function index(Request $request)
	{
    $query = Event::query();
	
	$organisatorsList = Organisator::all();
	$sportsList = Sport::all();

    if ($request->filled('name')) {
        $query->where('name', 'like', '%' . $request->input('name') . '%');
    }

    if ($request->filled('beginning_date')) {
        $query->whereDate('beginning_date', '=', $request->input('beginning_date'));
    }

    if ($request->filled('end_date')) {
        $query->whereDate('end_date', '=', $request->input('end_date'));
    }
	
	$events = $query->get();

    if ($request->filled('organisators')) {
        $organisatorName = $request->input('organisators');
        $events = $events->filter(function ($event) use ($organisatorName) {
            $organisators = $event->organisators->pluck('name')->toArray();
            return array_filter($organisators, function ($organisator) use ($organisatorName) {
                return stripos($organisator, $organisatorName) !== false;
            });
        });
    }

    if ($request->filled('sports')) {
        $selectedSportName = $request->input('sports');
        $events = $events->filter(function ($event) use ($selectedSportName) {
            $sports = $event->sports->pluck('name')->toArray();
            return in_array($selectedSportName, $sports);
        });
    }

    return view('events', [
        'events' => $events,
        'title' => 'Events',
		'organisatorsList' => $organisatorsList,
		'sportsList' => $sportsList,
    ]);
	}
}
