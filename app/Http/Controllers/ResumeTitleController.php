<?php

namespace App\Http\Controllers;

use App\Models\ResumeTitle;
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
        $resumeTitle = ResumeTitle::all();

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
            'ombreTitre' => 'required',
            'titre' => 'required',
            'sousTitre' => 'required'
        ]);

        $store = new ResumeTitle;
        $store->ombreTitre = $request->ombreTitre;
        $store->titre = $request->titre;
        $store->sousTitre = $request->sousTitre;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeTitle $resumeTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ResumeTitle::find($id);

        return view('backoffice/edit/resumeTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'ombreTitre' => 'required',
            'titre' => 'required',
            'sousTitre' => 'required'
        ]);

        $update = ResumeTitle::find($id);
        $update->ombreTitre = $request->ombreTitre;
        $update->titre = $request->titre;
        $update->sousTitre = $request->sousTitre;
        $update->save();
        return redirect('/back-resumeTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeTitle  $resumeTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ResumeTitle::find($id);
        $destroy->delete();
        return redirect('/back-resumeTitle');
    }
}
