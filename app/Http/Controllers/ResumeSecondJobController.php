<?php

namespace App\Http\Controllers;

use App\Models\resumeSecondJob;
use Illuminate\Http\Request;

class ResumeSecondJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secondJob = resumeSecondJob::all();

        return view('backoffice/pages/resumeSecondJob', compact('secondJob'));
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

        $store = new resumeSecondJob;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resumeSecondJob  $resumeSecondJob
     * @return \Illuminate\Http\Response
     */
    public function show(resumeSecondJob $resumeSecondJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resumeSecondJob  $resumeSecondJob
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = resumeSecondJob::find($id);

        return view('backoffice/edit/resumeSecondJobEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resumeSecondJob  $resumeSecondJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'content' => 'required'
        ]);

        $update = resumeSecondJob::find($id);
        $update->content = $request->content;
        $update->save();
        return redirect('/back-resumeSecondJob');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resumeSecondJob  $resumeSecondJob
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = resumeSecondJob::find($id);
        $destroy->delete();
        return redirect('/back-resumeSecondJob');
    }
}
