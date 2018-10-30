<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function show()
    {
        return response()->download(storage_path('app/testing/arZ6C2exK0piqq85eRudCMtJoJ3lacPVEGZGqfI6.png'), 'test');
    }

    public function create(Request $request)
    {
        $path = $request->file('photo')->store('testing');
        return response()->json(['path' => $path], 200);
    }
}
