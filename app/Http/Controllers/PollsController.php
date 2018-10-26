<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Poll;
use App\Http\Resources\Poll as PollResource;
use Illuminate\Http\Request;

class PollsController extends Controller
{

    public function index()
    {
        return response()->json(Poll::get(), 200);
    }


    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:191'
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $poll = Poll::create($request->all());
        return response()->json($poll, 201);
    }

    public function show($id)
    {
        $poll = Poll::with('questions')->findOrFail($id);

        $response['poll'] = $poll;
        $response['question'] = $poll->questions;
        return response()->json($response, 200);
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

    public function errors()
    {
        return response()->json(['msg' => 'Payment is required.'], 501);
    }

    public function questions(Request $request, Poll $poll)
    {
        $questions = $poll->questions;
        return response()->json($questions, 200);
    }
}
