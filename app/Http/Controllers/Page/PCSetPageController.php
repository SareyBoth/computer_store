<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page\PCSet;

class    PCSetPageController extends Controller
{
    public function main() 
    {
        $lenovo    = PCSet::where('brand', 'lenovo')->orderBy('price', 'asc')->paginate(20);
        $alineware     = PCSet::where('brand', 'alineware')->orderBy('price', 'asc')->paginate(20);
        $dell   = PCSet::where('brand', 'dell')->orderBy('price', 'asc')->paginate(20);

        return view('page.pc-set', compact('lenovo','alineware', 'dell',));
    }
}
