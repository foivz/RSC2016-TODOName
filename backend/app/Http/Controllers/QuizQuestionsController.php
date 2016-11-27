<?php

namespace quizzes\Http\Controllers;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;

use quizzes\QuizQuestion;
use Illuminate\Http\Request;
use Session;

class QuizQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $quizquestions = QuizQuestion::paginate(25);

        return view('quiz-questions.index', compact('quizquestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('quiz-questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        QuizQuestion::create($requestData);

        Session::flash('flash_message', 'QuizQuestion added!');

        return redirect('quiz-questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $quizquestion = QuizQuestion::findOrFail($id);

        return view('quiz-questions.show', compact('quizquestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $quizquestion = QuizQuestion::findOrFail($id);

        return view('quiz-questions.edit', compact('quizquestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $quizquestion = QuizQuestion::findOrFail($id);
        $quizquestion->update($requestData);

        Session::flash('flash_message', 'QuizQuestion updated!');

        return redirect('quiz-questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        QuizQuestion::destroy($id);

        Session::flash('flash_message', 'QuizQuestion deleted!');

        return redirect('quiz-questions');
    }
}
