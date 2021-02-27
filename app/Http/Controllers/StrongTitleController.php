<?php

namespace App\Http\Controllers;

use App\Models\StrongTitle;
use Illuminate\Http\Request;

class StrongTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strongTitle = StrongTitle::all();

        return view('backoffice/pages/strongTitle', compact('strongTitle'));
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
            'ombreTitle' => 'required',
            'title' => 'required',
            'sousTitle' => 'required'
        ]);

        $store = new StrongTitle;
        $store->ombreTitle = $request->ombreTitle;
        $store->title = $request->title;
        $store->sousTitle = $request->sousTitle;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StrongTitle  $strongTitle
     * @return \Illuminate\Http\Response
     */
    public function show(StrongTitle $strongTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StrongTitle  $strongTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = StrongTitle::find($id);

        return view('backoffice/edit/strongTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StrongTitle  $strongTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'ombreTitle' => 'required',
            'title' => 'required',
            'sousTitle' => 'required'
        ]);

        $update = StrongTitle::find($id);
        $update->ombreTitle = $request->ombreTitle;
        $update->title = $request->title;
        $update->sousTitle = $request->sousTitle;
        $update->save();
        return redirect('/back-strongTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StrongTitle  $strongTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = StrongTitle::find($id);
        $destroy->delete();
        return redirect('/back-strongTitle');
    }
}
