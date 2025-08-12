<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page\Home;

class HomePageController extends Controller
{
    public function home() 
    {
        $asus      = Home::where('brand', 'asus')->orderBy('price', 'asc')->paginate(20);
        $rog       = Home::where('brand', 'rog')->orderBy('price', 'asc')->paginate(20);
        $msi       = Home::where('brand', 'msi')->orderBy('price', 'asc')->paginate(20);
        $lenovo    = Home::where('brand', 'lenovo')->orderBy('price', 'asc')->paginate(20);
        $microsoft = Home::where('brand', 'microsoft')->orderBy('price', 'asc')->paginate(20);
        $alienware = Home::where('brand', 'alineware')->orderBy('price', 'asc')->paginate(20);
        $gigabyte  = Home::where('brand', 'gigabyte')->orderBy('price', 'asc')->paginate(20);
    
        return view('page.home', compact('asus', 'rog', 'msi', 'lenovo', 'microsoft', 'alienware', 'gigabyte'));
    }
    

}
