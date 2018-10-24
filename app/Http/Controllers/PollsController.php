<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;

class PollsController extends Controller
{

    public function index()
    {
        return response()->json(Poll::all());
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $poll = Poll::find($id);
        return response()->json($poll);
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
