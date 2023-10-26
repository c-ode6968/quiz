<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subjectF()
    {   $subjects = Quiz::select('subject')->distinct()->get();
        // dd($subjects);
        return view('quiz.subject', compact('subjects'));
    }


    public function quiz($subject){
        $quizzes = Quiz::where('subject', $subject)->get();
        // dd($quizzes);
        return view('quiz.listquiz', compact('quizzes'));
    }

    public function selectF(Request $request){
        $quizId = $request-> input('quiz_id');
        $selectedOption = $request->input('selected_option');
        $quiz = Quiz::find($quizId);
        // dd($selectedOption, $quiz->correct_option); // 

        $isCorrect = (strtoupper(trim($selectedOption)) === trim($quiz->correct_option));

        // dd($isCorrect);
        return view('quiz.result', compact('isCorrect'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
