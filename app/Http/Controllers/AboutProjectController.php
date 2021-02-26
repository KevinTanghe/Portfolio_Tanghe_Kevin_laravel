<?php

namespace App\Http\Controllers;

use App\Models\AboutProject;
use Illuminate\Http\Request;

class AboutProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutProject = AboutProject::all();

        return view('backoffice/pages/aboutProject', compact('aboutProject'));
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
            'icon' => 'required',
            'color' => 'required',
            'number' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        $store = new AboutProject;
        $store->icon = $request->icon;
        $store->color = $request->color;
        $store->number = $request->number;
        $store->description = $request->description;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutProject  $aboutProject
     * @return \Illuminate\Http\Response
     */
    public function show(AboutProject $aboutProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutProject  $aboutProject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = AboutProject::find($id);

        return view('backoffice/edit/aboutProjectEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutProject  $aboutProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'icon' => 'required',
            'color' => 'required',
            'number' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        $update = AboutProject::find($id);
        $update->icon = $request->icon;
        $update->color = $request->color;
        $update->number = $request->number;
        $update->description = $request->description;
        $update->content = $request->content;
        $update->save();
        return redirect('/back-aboutProject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutProject  $aboutProject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = AboutProject::find($id);
        $destroy->delete();
        return redirect('/back-aboutProject');
    }
}
