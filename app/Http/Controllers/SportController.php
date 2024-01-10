<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    public function index(Request $request) {
		$query = Sport::query();
		
		$this->applySorting($query, $request->input('sort_direction', 'desc'));

		$sports = $query->get();

        return view('sports', [
            'title' => 'Sports',
			'sports' => $sports,
        ]);
    }
	
	private function applySorting($query, $sortDirection)
    {
        $query->orderBy('created_at', $sortDirection);
    }
}
