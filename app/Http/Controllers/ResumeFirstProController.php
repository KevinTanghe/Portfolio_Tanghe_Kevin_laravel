<?php

namespace App\Http\Controllers;

use App\Models\ResumeFirstPro;
use Illuminate\Http\Request;

class ResumeFirstProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstPro = ResumeFirstPro::all();

        return view('backoffice/pages/resumeFirstPro', compact('firstPro'));
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
            'lieu' => 'required'
        ]);

        $store = new ResumeFirstPro;
        $store->mainTitle = $request->mainTitle;
        $store->title = $request->title;
        $store->years = $request->years;
        $store->lieu = $request->lieu;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResumeFirstPro  $resumeFirstPro
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeFirstPro $resumeFirstPro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeFirstPro  $resumeFirstPro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ResumeFirstPro::find($id);

        return view('backoffice/edit/resumeFirstProEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeFirstPro  $resumeFirstPro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'mainTitle' => 'required',
            'title' => 'required',
            'years' => 'required',
            'lieu' => 'required'
        ]);

        $update = ResumeFirstPro::find($id);
        $update->mainTitle = $request->mainTitle;
        $update->title = $request->title;
        $update->years = $request->years;
        $update->lieu = $request->lieu;
        $update->save();
        return redirect('/back-resumeFirstPro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeFirstPro  $resumeFirstPro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ResumeFirstPro::find($id);
        $destroy->delete();
        return redirect('/back-resumeFirstPro');
    }
}
