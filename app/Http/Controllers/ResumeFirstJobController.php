<?php

namespace App\Http\Controllers;

use App\Models\ResumeFirstJob;
use Illuminate\Http\Request;

class ResumeFirstJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstJob = ResumeFirstJob::all();

        return view('backoffice/pages/resumeFirstJob', compact('firstJob'));
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
            'content' => 'required'
        ]);

        $store = new ResumeFirstJob;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResumeFirstJob  $resumeFirstJob
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeFirstJob $resumeFirstJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeFirstJob  $resumeFirstJob
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ResumeFirstJob::find($id);

        return view('backoffice/edit/resumeFirstJobEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeFirstJob  $resumeFirstJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'content' => 'required'
        ]);

        $update = ResumeFirstJob::find($id);
        $update->content = $request->content;
        $update->save();
        return redirect('/back-resumeFirstJob');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeFirstJob  $resumeFirstJob
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ResumeFirstJob::find($id);
        $destroy->delete();
        return redirect('/back-resumeFirstJob');
    }
}
