<?php

namespace quizzes\Http\Controllers;

use quizzes\Http\Requests;
use quizzes\Http\Controllers\Controller;

use quizzes\adminPanel;
use Illuminate\Http\Request;
use Session;

class adminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $adminpanel = adminPanel::paginate(25);

        return view('admin-panel.index', compact('adminpanel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin-panel.create');
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
        
        adminPanel::create($requestData);

        Session::flash('flash_message', 'adminPanel added!');

        return redirect('admin-panel');
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
        $adminpanel = adminPanel::findOrFail($id);

        return view('admin-panel.show', compact('adminpanel'));
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
        $adminpanel = adminPanel::findOrFail($id);

        return view('admin-panel.edit', compact('adminpanel'));
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
        
        $adminpanel = adminPanel::findOrFail($id);
        $adminpanel->update($requestData);

        Session::flash('flash_message', 'adminPanel updated!');

        return redirect('admin-panel');
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
        adminPanel::destroy($id);

        Session::flash('flash_message', 'adminPanel deleted!');

        return redirect('admin-panel');
    }
}
