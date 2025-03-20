<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\PCSet;

class PCSetController extends Controller
{
    public function index()
    {
        // Paginate the jobs and display 6 items per page
        $pcsets = PCSet::orderBy('id', 'desc')->paginate(perPage: 20);
        
        // Pass the paginated job data to the view
        return view('dashboard.pc-set.index', compact('pc-set'));
    }  
}
