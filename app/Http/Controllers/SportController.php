<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    public function index() {
		$query = Sport::query();
		$sports = $query->get();

        return view('sports', [
            'title' => 'Sports',
			'sports' => $sports,
        ]);
    }
}
