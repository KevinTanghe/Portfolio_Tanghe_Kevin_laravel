<?php

namespace App\Http\Controllers;

use App\Models\resumeSecondPro;
use Illuminate\Http\Request;

class ResumeSecondProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secondPro = resumeSecondPro::all();

        return view('backoffice/pages/resumeSecondPro', compact('secondPro'));
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
            'years' => 'required',
            'lieu' => 'required'
        ]);

        $store = new resumeSecondPro;
        $store->title = $request->title;
        $store->years = $request->years;
        $store->lieu = $request->lieu;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resumeSecondPro  $resumeSecondPro
     * @return \Illuminate\Http\Response
     */
    public function show(resumeSecondPro $resumeSecondPro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resumeSecondPro  $resumeSecondPro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = resumeSecondPro::find($id);

        return view('backoffice/edit/resumeSecondProEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resumeSecondPro  $resumeSecondPro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required',
            'years' => 'required',
            'lieu' => 'required'
        ]);

        $update = resumeSecondPro::find($id);
        $update->title = $request->title;
        $update->years = $request->years;
        $update->lieu = $request->lieu;
        $update->save();
        return redirect('/back-resumeSecondPro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resumeSecondPro  $resumeSecondPro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = resumeSecondPro::find($id);
        $destroy->delete();
        return redirect('/back-resumeSecondPro');
    }
}
