<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        return view('index.index', [
            'title' => 'Sport Events',
            'text' => '<p>
                Introducing your essential desktop tool for streamlined sports event information – 
				a no-nonsense application designed solely for providing details about upcoming sports events. 
				This desktop app focuses on simplicity and efficiency, offering users a clean interface 
				dedicated exclusively to event schedules, dates, and matchups. Tailored for quick and 
				straightforward access, it ensures you stay informed without unnecessary distractions. 
				Download now and make your desktop the go-to place for effortless updates on upcoming sports 
				events, without any streaming complexities.
            </p>',
            'imgURL' => 'assets/images/about/header-sport-events-2.jpg',
        ]);
    }
}
