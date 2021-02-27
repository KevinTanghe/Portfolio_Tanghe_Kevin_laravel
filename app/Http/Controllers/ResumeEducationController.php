<?php

namespace App\Http\Controllers;

use App\Models\ResumeEducation;
use Illuminate\Http\Request;

class ResumeEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumeEducation = ResumeEducation::all();

        return view('backoffice/pages/resumeEducation', compact('resumeEducation'));
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
            'mainTitle' => 'required',
            'title' => 'required',
            'years' => 'required',
            'lieu' => 'required',
            'content' => 'required'
        ]);

        $store = new ResumeEducation;
        $store->mainTitle = $request->mainTitle;
        $store->title = $request->title;
        $store->years = $request->years;
        $store->lieu = $request->lieu;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResumeEducation  $resumeEducation
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeEducation $resumeEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeEducation  $resumeEducation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ResumeEducation::find($id);

        return view('backoffice/edit/resumeEducationEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeEducation  $resumeEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'mainTitle' => 'required',
            'title' => 'required',
            'years' => 'required',
            'lieu' => 'required',
            'content' => 'required'
        ]);

        $update = ResumeEducation::find($id);
        $update->mainTitle = $request->mainTitle;
        $update->title = $request->title;
        $update->years = $request->years;
        $update->lieu = $request->lieu;
        $update->content = $request->content;
        $update->save();
        return redirect('/back-resumeEducation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeEducation  $resumeEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ResumeEducation::find($id);
        $destroy->delete();
        return redirect('/back-resumeEducation');
    }
}
