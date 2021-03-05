<?php

namespace App\Http\Controllers;

use App\Models\resumeTitle;
use Illuminate\Http\Request;

class ResumeTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumeTitle = resumeTitle::all();

        return view('backoffice/pages/resumeTitle', compact('resumeTitle'));
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
        $validation = $request->validate([
            'title' => 'required',
            'sousTitle' => 'required',
        ]);

        $store = new resumeTitle;
        $store->head = $request->head;
        $store->title = $request->title;
        $store->years = $request->years;
        $store->sousTitle = $request->sousTitle;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function show(resumeTitle $resumeTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = resumeTitle::find($id);

        return view('backoffice/edit/resumeTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required',
            'sousTitle' => 'required',
        ]);

        $update = resumeTitle::find($id);
        $update->head = $request->head;
        $update->title = $request->title;
        $update->years = $request->years;
        $update->sousTitle = $request->sousTitle;
        $update->content = $request->content;
        $update->save();
        return redirect('/back-resumeTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = resumeTitle::find($id);
        $destroy->delete();
        return redirect('/back-resumeTitle');
    }
}
