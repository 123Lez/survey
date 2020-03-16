<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function show()
    {
    	return view('take_survey');
    }
    public function fetchquestion(Request $request)
    {
    	return response()->json('question');
    }
    public function completeSurvey()
    {
    	return view('complete_survey');
    }
}
