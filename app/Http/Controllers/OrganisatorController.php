<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisator;

class OrganisatorController extends Controller
{
    public function index() {
		$query = Organisator::query();
		$organisators = $query->get();

        return view('organisators', [
            'title' => 'Organisators',
			'organisators' => $organisators,
        ]);
    }
}
