<?php

namespace App\Http\Controllers\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\Page\Location;

class LocationController extends Controller
{
    public function location()
    {
          $locations = Location::all();
          return view('page.location', compact('locations'));
    }
}
