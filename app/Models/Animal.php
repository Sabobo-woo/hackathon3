<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\Image;

class Animal extends Model
{
    use HasFactory;

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3'
        ], [
            'name.required' => 'The name is required'
        ]);
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
        return redirect()->route('animal.edit', $animal->id);
       
    }
    public function owner() {
        return $this->belongsTo(Owner::class);
    }


    public function image() {
        return $this->belongsTo(Image::class);
    }


}
