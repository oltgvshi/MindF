<?php

namespace App\Http\Controllers;

use App\Models\Illusion;
use Illuminate\Http\Request;

class IllusionController extends Controller
{
    public function destroy(Post $post) {
        $post->delete();
        return redirect('/dashboard/')->with('message', 'Illusion deleted successfully');
    }
}
