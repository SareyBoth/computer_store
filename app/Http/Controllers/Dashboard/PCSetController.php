<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\PCSet;

class PCSetController extends Controller
{
    public function index()
    {
        $pcSets = PCSet::orderBy('id', 'desc')->paginate(perPage: 20);
        
        return view('dashboard.pc-set.index', compact('pcSets'));
    }  

    public function edit(PCSet $pcSet) 
    {
        return view('dashboard.pc-set.edit', compact('pcSet'));;
    }


    public function create() 
    {
        return view('dashboard.pc-set.create');
    }

    public function destroy($id)
    {
        $pcSets = PCSet::find($id);

        if (!$pcSets) {

            return redirect()->route('pc_set.index')->with('error', 'Pc Set not found.');
        }

        $pcSets->delete();

        return redirect()->route('pc_set.index')->with('success', 'Pc Set deleted successfully.');
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|numeric',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); 
        } else {
            $imagePath = null;
        }
    
        // Create the drink record
        PCSet::create([
            'name' => $validated['name'],
            'brand' => $validated['brand'],
            'description' => $validated['description'],
            'image' => $imagePath ? 'storage/' . $imagePath : null, 
            'price' => $validated['price'],
        ]);
    
        return redirect()->route('pc_set.index')->with('success', 'PC Sets created successfully.');
    }

    public function update(Request $request, PCSet $pcSet)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|numeric',
        ]);
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Store in storage/app/public/images
            
            // Delete the old image if it exists
            if ($pcSet->image && file_exists(public_path($pcSet->image))) {
                unlink(public_path($pcSet->image));
            }
            
            $validated['image'] = 'storage/' . $imagePath; // Save the new public path
        } else {
            $validated['image'] = $pcSet->image; // Keep old image if no new one is uploaded
        }
    
        $pcSet->update($validated);
    
        return redirect()->route('pc_set.index')->with('success', 'PC Set updated successfully.');
    }
}
