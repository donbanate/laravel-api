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
        
    }

    public function show($id)
    {
        $poll = Poll::find($id);
        return response()->json($poll);
    }


    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->all());
        return response()->json($poll, 200);
    }

    public function destroy(Request $request, Poll $poll)
    {
        $poll->delete();
        return response()->json(null, 204);
    }
}
