<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    // Display the form to add a new property
    public function create()
    {
        return view('properties.create');
    }

    // Store the new property in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'bedrooms' => 'required|integer|min:1',
            'bathrooms' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'property_type' => 'required|in:House,Apartment',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the photo upload
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads', $fileName, 'public');
            $validatedData['photo'] = $filePath;
        }

        // Create a new property record
        Property::create($validatedData);

        return redirect('/properties')->with('success', 'Property successfully added!');
    }

    // Display a list of properties
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    // Show an individual property (using Route Model Binding)
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }
}
