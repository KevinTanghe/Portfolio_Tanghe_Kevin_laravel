<?php

namespace App\Http\Controllers;

use App\Models\AboutTitle;
use Illuminate\Http\Request;

class AboutTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutTitle = AboutTitle::all();

        return view('backoffice/pages/aboutTitle', compact('aboutTitle'));
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

        $store = new AboutTitle;
        $store->ombreTitre = $request->ombreTitre;
        $store->titre = $request->titre;
        $store->sousTitre = $request->sousTitre;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function show(AboutTitle $aboutTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = AboutTitle::find($id);

        return view('backoffice/edit/aboutTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validate([
            'ombreTitre' => 'required',
            'titre' => 'required',
            'sousTitre' => 'required'
        ]);

        $update = AboutTitle::find($id);
        $update->ombreTitre = $request->ombreTitre;
        $update->titre = $request->titre;
        $update->sousTitre = $request->sousTitre;
        $update->save();
        return redirect('back-aboutTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutTitle  $aboutTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = AboutTitle::find($id);
        $destroy->delete();
        return redirect('/back-aboutTitle');
    }
}
