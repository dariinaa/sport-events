<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisator;

class OrganisatorController extends Controller
{
    public function index(Request $request) {
		$query = Organisator::query();
		
		$this->applySorting($query, $request->input('sort_direction', 'desc'));

		$organisators = $query->get();

        return view('organisators', [
            'title' => 'Organisators',
			'organisators' => $organisators,
        ]);
    }
	
	    private function applySorting($query, $sortDirection)
    {
        $query->orderBy('created_at', $sortDirection);
    }
}
