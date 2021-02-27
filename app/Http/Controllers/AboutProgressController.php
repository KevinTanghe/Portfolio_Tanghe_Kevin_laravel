<?php

namespace App\Http\Controllers;

use App\Models\AboutProgress;
use Illuminate\Http\Request;

class AboutProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutProgress = AboutProgress::all();

        return view('backoffice/pages/aboutProgress', compact('aboutProgress'));
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
            'language' => 'required',
            'pourcentage' => 'required'
        ]);

        $store = new AboutProgress;
        $store->language = $request->language;
        $store->pourcentage = $request->pourcentage;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutProgress  $aboutProgress
     * @return \Illuminate\Http\Response
     */
    public function show(AboutProgress $aboutProgress)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutProgress  $aboutProgress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = AboutProgress::find($id);

        return view('backoffice/edit/aboutProgressEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutProgress  $aboutProgress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validate([
            'language' => 'required',
            'pourcentage' => 'required'
        ]);

        $update = AboutProgress::find($id);
        $update->language = $request->language;
        $update->pourcentage = $request->pourcentage;
        $update->save();
        return redirect('/back-aboutProgress');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutProgress  $aboutProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = AboutProgress::find($id);
        $destroy->delete();
        return redirect('/back-aboutProgress');
    }
}
