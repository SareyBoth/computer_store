<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page\Accessory;

class AccessoryPageController extends Controller
{
    public function main() 
    {
        $razer      = Accessory::where('brand', 'razer')->orderBy('price', 'asc')->paginate(20);
        $corsair       = Accessory::where('brand', 'corsair')->orderBy('price', 'asc')->paginate(20);
        $dxracer       = Accessory::where('brand', 'dxracer')->orderBy('price', 'asc')->paginate(20);
        $logitech    = Accessory::where('brand', 'logitech')->orderBy('price', 'asc')->paginate(20);
        $hyperx = Accessory::where('brand', 'hyperx')->orderBy('price', 'asc')->paginate(20);
        $akko = Accessory::where('brand', 'alineware')->orderBy('price', 'asc')->paginate(20);
        
        return view('page.accessory' ,compact('razer','corsair', 'dxracer','logitech','hyperx','akko'));
    }
}
