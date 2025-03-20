<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Accessory;

class AccessoryController extends Controller
{
    public function index()
    {
        // Paginate the jobs and display 6 items per page
        $accessorys = Accessory::orderBy('id', 'desc')->paginate(perPage: 20);
        
        // Pass the paginated job data to the view
        return view('dashboard.accessory.index', compact('accessory'));
    }  
}
