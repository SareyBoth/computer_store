<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page\PCHardware;

class PCHardwarePageController extends Controller
{
    public function main(Request $request)
    {
        $cpu       = PCHardware::where('type', 'cpu')->orderBy('price', 'asc')->paginate(20);
        $ram       = PCHardware::where('type', 'ram')->orderBy('price', 'asc')->paginate(20);
        $cooler    = PCHardware::where('type', 'cooler')->orderBy('price', 'asc')->paginate(20);
        $intel     = PCHardware::where('type', 'intel')->orderBy('price', 'asc')->paginate(20);
        $amd       = PCHardware::where('type', 'amd')->orderBy('price', 'asc')->paginate(20);
        $gpu       = PCHardware::where('type', 'gpu')->orderBy('price', 'asc')->paginate(20);
        $psu       = PCHardware::where('type', 'psu')->orderBy('price', 'asc')->paginate(20);
        $storage   = PCHardware::where('type', 'storage')->orderBy('price', 'asc')->paginate(20);
        $case      = PCHardware::where('type', 'case')->orderBy('price', 'asc')->paginate(20);
        $monitor   = PCHardware::where('type', 'monitor')->orderBy('price', 'asc')->paginate(20);
    
        return view('page.pc-hardware', compact('cpu', 'ram', 'cooler', 'intel', 'amd', 'gpu', 'psu', 'storage', 'case', 'monitor'));
    }
    
}
