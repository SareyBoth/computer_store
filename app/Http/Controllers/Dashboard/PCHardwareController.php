<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard\PCHardware;

class PCHardwareController extends Controller
{
    public function index()
    {
        $pcHardwares = PCHardware::orderBy('id', 'desc')->paginate(perPage: 20);
        
        return view('dashboard.pc-hardware.index', compact('pcHardwares'));
    }  

    public function create() 
    {
        return view('dashboard.pc-hardware.create');
    }

    public function edit(PCHardware $pcHardware) 
    {
        return view('dashboard.pc-hardware.edit', compact('pcHardware'));;
    }

    public function destroy($id)
    {
        $pcHardwares = PCHardware::find($id);

        if (!$pcHardwares) {

            return redirect()->route('pc_hardware.index')->with('error', 'Pc Hardwares not found.');
        }

        $pcHardwares->delete();

        return redirect()->route('pc_hardware.index')->with('success', 'Pc Hardwares deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
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
    
        PCHardware::create([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'description' => $validated['description'],
            'image' => $imagePath ? 'storage/' . $imagePath : null, 
            'price' => $validated['price'],
        ]);
    
        return redirect()->route('pc_hardware.index')->with('success', 'PC Sets created successfully.');
    }

    public function update(Request $request, PCHardware $pcHardware)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'price' => 'required|numeric',
        ]);
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Store in storage/app/public/images
            
            // Delete the old image if it exists
            if ($pcHardware->image && file_exists(public_path($pcHardware->image))) {
                unlink(public_path($pcHardware->image));
            }
            
            $validated['image'] = 'storage/' . $imagePath; // Save the new public path
        } else {
            $validated['image'] = $pcHardware->image; // Keep old image if no new one is uploaded
        }
    
        $pcHardware->update($validated);
    
        return redirect()->route('pc_hardware.index')->with('success', 'PC Hardware updated successfully.');
    }
}
