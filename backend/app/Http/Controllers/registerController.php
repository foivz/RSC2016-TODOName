<?php

namespace quizzes\Http\Controllers;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;

use quizzes\register;
use Illuminate\Http\Request;
use Session;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $register = register::paginate(20);

        return view('register.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register.create');
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
        
        register::create($requestData);

        Session::flash('flash_message', 'register added!');

        return redirect('register');
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
        $register = register::findOrFail($id);

        return view('register.show', compact('register'));
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
        $register = register::findOrFail($id);

        return view('register.edit', compact('register'));
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
        
        $register = register::findOrFail($id);
        $register->update($requestData);

        Session::flash('flash_message', 'register updated!');

        return redirect('register');
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
        register::destroy($id);

        Session::flash('flash_message', 'register deleted!');

        return redirect('register');
    }
}
