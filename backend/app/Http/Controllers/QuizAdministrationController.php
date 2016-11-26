<?php

namespace quizzes\Http\Controllers;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;

use quizzes\QuizAdministration;
use Illuminate\Http\Request;
use Session;

class QuizAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $quizadministration = QuizAdministration::paginate(25);

        return view('quiz-administration.index', compact('quizadministration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('quiz-administration.create');
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
        
        QuizAdministration::create($requestData);

        Session::flash('flash_message', 'QuizAdministration added!');

        return redirect('quiz-administration');
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
        $quizadministration = QuizAdministration::findOrFail($id);

        return view('quiz-administration.show', compact('quizadministration'));
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
        $quizadministration = QuizAdministration::findOrFail($id);

        return view('quiz-administration.edit', compact('quizadministration'));
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
        
        $quizadministration = QuizAdministration::findOrFail($id);
        $quizadministration->update($requestData);

        Session::flash('flash_message', 'QuizAdministration updated!');

        return redirect('quiz-administration');
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
        QuizAdministration::destroy($id);

        Session::flash('flash_message', 'QuizAdministration deleted!');

        return redirect('quiz-administration');
    }
}
