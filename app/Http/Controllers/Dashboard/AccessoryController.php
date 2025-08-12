<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Accessory;

class AccessoryController extends Controller
{
    public function index()
    {
        $accessorys = Accessory::orderBy('id', 'desc')->paginate(perPage: 20);
        
        return view('dashboard.accessory.index', compact('accessorys'));
    }  

    public function create() 
    {
        return view('dashboard.accessory.create');
    }

    public function edit(Accessory $accessory) 
    {
        return view('dashboard.accessory.edit', compact('accessory'));;
    }

    public function destroy($id)
    {
        $accessorys = Accessory::find($id);

        if (!$accessorys) {

            return redirect()->route('accessory.index')->with('error', 'Accessorys not found.');
        }

        $accessorys->delete();

        return redirect()->route('accessory.index')->with('success', 'Accessorys deleted successfully.');
    }

    public function store(Request $request)
    {
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
    
        Accessory::create([
            'name' => $validated['name'],
            'brand' => $validated['brand'],
            'description' => $validated['description'],
            'image' => $imagePath ? 'storage/' . $imagePath : null, 
            'price' => $validated['price'],
        ]);
    
        return redirect()->route('accessory.index')->with('success', 'PC Sets created successfully.');
    }

    public function update(Request $request, Accessory $accessory)
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
            if ($accessory->image && file_exists(public_path($accessory->image))) {
                unlink(public_path($accessory->image));
            }
            
            $validated['image'] = 'storage/' . $imagePath; // Save the new public path
        } else {
            $validated['image'] = $accessory->image; // Keep old image if no new one is uploaded
        }
    
        $accessory->update($validated);
    
        return redirect()->route('accessory.index')->with('success', 'Accessory updated successfully.');
    }

}
