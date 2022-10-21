<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;


class AnimalController extends Controller
{
     public function create()
    {
        $animal = new Animal;
        
        return view('CRUD/upsert', compact('animal'));
    }

    public function edit($id, Request $request)
    {
        $animal = Animal::findOrFail($id);
        
        return view('CRUD/upsert', compact('animal'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha',
            'age' => 'numeric',
            'weight' => 'numeric'
        ], [
            'name.required' => 'The name is required',
            'name.alpha' => 'The name must be entirely alphabetic characters',
            'age.numeric' => 'The age must be a numeric value',
            'weight' => 'The weight must be a numeric value'
        ]);


        $animal = Animal::findOrFail($id);
        $animal->image_id = $request->input('image_id');
        $animal->owner_id = $request->input('owner_id');
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->save();

       
        
        session()->flash('success_message', 'The record was successfully edited.');
        return redirect()->route('animals.edit', $animal->id);
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha',
            'age' => 'numeric',
            'weight' => 'numeric'
        ], [
            'name.required' => 'The name is required',
            'name.alpha' => 'The name must be entirely alphabetic characters',
            'age.numeric' => 'The age must be a numeric value',
            'weight' => 'The weight must be a numeric value'
        ]);

        $request->input('breed');

        $animal = new Animal;
        $animal->image_id = $request->input('image_id');
        $animal->owner_id = $request->input('owner_id');
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        
        $animal->save();

        session()->flash('success_message', 'The record was successfully saved.');
        return redirect()->route('animals.edit', $animal->id);
        
    }

    public function delete($id, Request $request)
    {

        $animal = Animal::findOrFail($id);
        $animal->delete();

        session()->flash('success_message', 'The record was successfully deleted.');
        return redirect()->route('animals.create');
    }
}
