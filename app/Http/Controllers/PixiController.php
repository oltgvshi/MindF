<?php

namespace App\Http\Controllers;

use App\Models\Pixi;
use Illuminate\Http\Request;

class PixiController extends Controller
{
        // Show Edit Form
        public function edit(Pixi $pixi){
            return view('pixi.edit')
            ->with('pixi',$pixi);
        }
    
        // Update Pixi Data
        public function update(Request $request, Pixi $pixi){
            $formFields = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'what' => 'required',
                'how' => 'required'
            ]);
    
            if($request->hasFile('thumbnail_url')){
                $formFields['thumbnail_url'] = $request->file('thumbnail_url')->store('illusions','public');
            }
    
            $pixi->update($formFields);
    
            return redirect('/dashboard')->with('message', 'Pixi updated successfully!');
        }
    
}
