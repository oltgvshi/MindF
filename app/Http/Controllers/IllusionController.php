<?php

namespace App\Http\Controllers;

use App\Models\Illusion;
use Illuminate\Http\Request;

class IllusionController extends Controller
{
    
    // Show Create Form
    public function create(){
        return view('illusions.create');
    }

    // Store Illusion Data
    public function store(Request $request){
        $formFields = $request->validate([
            'image_url' => 'required',
            'name' => 'required',
            'description' => 'required',
            'what' => 'required',
            'how' => 'required'
        ]);

        if($request->hasFile('image_url')){
            $formFields['image_url'] = $request->file('image_url')->store('illusions','public');
        }

        Illusion::create($formFields);

        return redirect('/dashboard')->with('message', 'Illusion created successfully!');
    }

    // Show Edit Form
    public function edit(Illusion $illusion){
        return view('illusions.edit')
        ->with('illusion',$illusion);
    }

    // Update Illusion Data
    public function update(Request $request, Illusion $illusion){
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'what' => 'required',
            'how' => 'required'
        ]);

        if($request->hasFile('image_url')){
            $formFields['image_url'] = $request->file('image_url')->store('illusions','public');
        }

        $illusion->update($formFields);

        return redirect('/dashboard')->with('message', 'Illusion updated successfully!');
    }

    // Show Illusion
    public function show(Illusion $illusion) {
        return view('illusions.show')
            ->with('illusion',$illusion);
    }

    // Delete Illusion
    public function destroy(Illusion $illusion) {
        $illusion->delete();
        return redirect('/dashboard')->with('message', 'Illusion deleted successfully');
    }
}
