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

        $this->applySorting($query, $request->input('sort_direction', 'desc'));
        $this->applyNameFilter($query, $request->input('name'));
        $this->applyDateFilters($query, $request->input('beginning_date'), $request->input('end_date'));
        $this->applyOrganisatorFilter($query, $request->input('organisators'));
        $this->applySportFilter($query, $request->input('sports'));

        $events = $query->get();

        return view('events', [
            'events' => $events,
            'title' => 'Events',
            'organisatorsList' => $organisatorsList,
            'sportsList' => $sportsList,
        ]);
    }

    private function applySorting($query, $sortDirection)
    {
        $query->orderBy('created_at', $sortDirection);
    }

    private function applyNameFilter($query, $name)
    {
        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }
    }

    private function applyDateFilters($query, $beginningDate, $endDate)
    {
        if ($beginningDate) {
            $query->whereDate('beginning_date', '=', $beginningDate);
        }

        if ($endDate) {
            $query->whereDate('end_date', '=', $endDate);
        }
    }

    private function applyOrganisatorFilter($query, $organisatorName)
    {
        if ($organisatorName) {
            $query->whereHas('organisators', function ($organisatorQuery) use ($organisatorName) {
                $organisatorQuery->where('name', 'like', '%' . $organisatorName . '%');
            });
        }
    }

    private function applySportFilter($query, $selectedSportName)
    {
        if ($selectedSportName) {
            $query->whereHas('sports', function ($sportQuery) use ($selectedSportName) {
                $sportQuery->where('name', '=', $selectedSportName);
            });
        }
    }
}
