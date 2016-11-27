<?php

namespace quizzes\Http\Controllers;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;

use quizzes\UserAdministration;
use Illuminate\Http\Request;
use Session;

class UserAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $useradministration = UserAdministration::paginate(25);

        return view('user-administration.index', compact('useradministration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user-administration.create');
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
        
        UserAdministration::create($requestData);

        Session::flash('flash_message', 'UserAdministration added!');

        return redirect('user-administration');
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
        $useradministration = UserAdministration::findOrFail($id);

        return view('user-administration.show', compact('useradministration'));
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
        $useradministration = UserAdministration::findOrFail($id);

        return view('user-administration.edit', compact('useradministration'));
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
        
        $useradministration = UserAdministration::findOrFail($id);
        $useradministration->update($requestData);

        Session::flash('flash_message', 'UserAdministration updated!');

        return redirect('user-administration');
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
        UserAdministration::destroy($id);

        Session::flash('flash_message', 'UserAdministration deleted!');

        return redirect('user-administration');
    }
}
