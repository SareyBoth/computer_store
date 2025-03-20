<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\PCHardware;

class PCHardwareController extends Controller
{
    public function index()
    {
        // Paginate the jobs and display 6 items per page
        $phhardwares = PCHardware::orderBy('id', 'desc')->paginate(perPage: 20);
        
        // Pass the paginated job data to the view
        return view('dashboard.pc-hardware.index', compact('pc-hardware'));
    }  
}
