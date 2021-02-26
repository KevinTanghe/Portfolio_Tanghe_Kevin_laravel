<?php

namespace App\Http\Controllers;

use App\Models\AboutDescription;
use Illuminate\Http\Request;

class AboutDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutDescription = AboutDescription::all();

        return view('backoffice/pages/aboutDescription', compact('aboutDescription'));
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
            'description' => 'required',
            'content' => 'required'
        ]);

        $store = new AboutDescription;
        $store->description = $request->description;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutDescription  $aboutDescription
     * @return \Illuminate\Http\Response
     */
    public function show(AboutDescription $aboutDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutDescription  $aboutDescription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = AboutDescription::find($id);

        return view('backoffice/edit/aboutDescriptionEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutDescription  $aboutDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'description' => 'required',
            'content' => 'required'
        ]);

        $update = AboutDescription::find($id);
        $update->description = $request->description;
        $update->content = $request->content;
        $update->save();
        return redirect('/back-aboutDescription');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutDescription  $aboutDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = AboutDescription::find($id);
        $destroy->delete();
        return redirect('/back-aboutDescription');
    }
}
