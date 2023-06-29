<?php

namespace App\Http\Controllers;

use App\Models\Illusion;
use Illuminate\Http\Request;

class IllusionController extends Controller
{
    public function show(Illusion $illusion) {
        return view('illusions.show')
            ->with('illusion',$illusion);
    }

    public function destroy(Illusion $illusion) {
        $illusion->delete();
        return redirect('/dashboard')->with('message', 'Illusion deleted successfully');
    }
}
