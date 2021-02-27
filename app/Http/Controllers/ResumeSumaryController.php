<?php

namespace App\Http\Controllers;

use App\Models\ResumeSumary;
use Illuminate\Http\Request;

class ResumeSumaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumeSumary = ResumeSumary::all();

        return view('backoffice/pages/resumeSumary', compact('resumeSumary'));
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
            'mainTitre' => 'required',
            'titre' => 'required',
            'description' => 'required'
        ]);

        $store = new ResumeSumary;
        $store->mainTitre = $request->mainTitre;
        $store->titre = $request->titre;
        $store->description = $request->description;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResumeSumary  $resumeSumary
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeSumary $resumeSumary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeSumary  $resumeSumary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ResumeSumary::find($id);

        return view('backoffice/edit/resumeSumaryEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeSumary  $resumeSumary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'mainTitre' => 'required',
            'titre' => 'required',
            'description' => 'required'
        ]);

        $update = ResumeSumary::find($id);
        $update->mainTitre = $request->mainTitre;
        $update->titre = $request->titre;
        $update->description = $request->description;
        $update->save();
        return redirect('/back-resumeSumary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeSumary  $resumeSumary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ResumeSumary::find($id);
        $destroy->delete();
        return redirect('/back-resumeSumary');
    }
}
