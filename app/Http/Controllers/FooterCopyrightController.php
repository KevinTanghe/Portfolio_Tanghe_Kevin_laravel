<?php

namespace App\Http\Controllers;

use App\Models\FooterCopyright;
use Illuminate\Http\Request;

class FooterCopyrightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerCopyright = FooterCopyright::all();

        return view('backoffice/pages/footerCopyright', compact('footerCopyright'));
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
            'copyright' => 'required',
            'name' => 'required',
            'droit' => 'required'
        ]);

        $store = new FooterCopyright;
        $store->copyright = $request->copyright;
        $store->name = $request->name;
        $store->droit = $request->droit;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterCopyright  $footerCopyright
     * @return \Illuminate\Http\Response
     */
    public function show(FooterCopyright $footerCopyright)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterCopyright  $footerCopyright
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = FooterCopyright::find($id);

        return view('backoffice/edit/footerCopyrightEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterCopyright  $footerCopyright
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'copyright' => 'required',
            'name' => 'required',
            'droit' => 'required'
        ]);

        $update = FooterCopyright::find($id);
        $update->copyright = $request->copyright;
        $update->name = $request->name;
        $update->droit = $request->droit;
        $update->save();
        return redirect('/back-footerCopyright');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterCopyright  $footerCopyright
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = FooterCopyright::find($id);
        $destroy->delete();
        return redirect('/back-footerCopyright');
    }
}
