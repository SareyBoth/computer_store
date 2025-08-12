<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\Laptop;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::orderBy('id', 'desc')->paginate(perPage: 20);
        
        return view('dashboard.laptop.index', compact('laptops'));
    }  

    public function create() 
    {
        return view('dashboard.laptop.create');
    }

    public function edit(Laptop $laptop) 
    {
        return view('dashboard.laptop.edit', compact('laptop'));;
    }

    public function destroy($id)
    {
        $laptops = Laptop::find($id);

        if (!$laptops) {

            return redirect()->route('laptop.index')->with('error', 'Laptop not found.');
        }

        $laptops->delete();

        return redirect()->route('laptop.index')->with('success', 'Laptop deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|numeric',
            'cpu' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'graphic' => 'required|string|max:255',
            'display' => 'required|string|max:255',
            'os' => 'required|string|max:255',
            'battery' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'warranty' => 'required|string|max:255',
            'upgrade' => 'required|string|max:255', // Change from string to array
        ]);
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        } else {
            $imagePath = null;
        }
    
        // Create Laptop record
        Laptop::create([
            'name' => $validated['name'],
            'brand' => $validated['brand'],
            'image' => $imagePath ? 'storage/' . $imagePath : null,
            'price' => $validated['price'],
            'cpu' => $validated['cpu'],
            'ram' => $validated['ram'],
            'storage' => $validated['storage'],
            'graphic' => $validated['graphic'],
            'display' => $validated['display'],
            'os' => $validated['os'],
            'battery' => $validated['battery'],
            'weight' => $validated['weight'],
            'warranty' => $validated['warranty'],
            'upgrade' => $validated['upgrade'], // Store as JSON
        ]);
    
        return redirect()->route('laptop.index')->with('success', 'Laptop Set created successfully.');
    }
    
    public function update(Request $request, Laptop $laptop)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Image is optional
            'price' => 'required|numeric',
            'cpu' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'graphic' => 'required|string|max:255',
            'display' => 'required|string|max:255',
            'os' => 'required|string|max:255',
            'battery' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'warranty' => 'required|string|max:255',
            'upgrade' => 'required|string|max:255',
        ]);
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Store in storage/app/public/images
            
            // Delete the old image if it exists
            if ($laptop->image && file_exists(public_path($laptop->image))) {
                unlink(public_path($laptop->image));
            }
            
            $validated['image'] = 'storage/' . $imagePath; // Save the new public path
        } else {
            $validated['image'] = $laptop->image; // Keep old image if no new one is uploaded
        }
    
        $laptop->update($validated);
    
        return redirect()->route('laptop.index')->with('success', 'Laptop updated successfully.');
    }
    


}
