<?php

namespace App\Http\Controllers;

use App\Models\FooterTitle;
use Illuminate\Http\Request;

class FooterTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerTitle = FooterTitle::all();

        return view('backoffice/pages/footerTitle', compact('footerTitle'));
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
            'title' => 'required'
        ]);

        $store = new FooterTitle;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterTitle  $footerTitle
     * @return \Illuminate\Http\Response
     */
    public function show(FooterTitle $footerTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterTitle  $footerTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = FooterTitle::find($id);

        return view('backoffice/edit/footerTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterTitle  $footerTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required'
        ]);

        $update = FooterTitle::find($id);
        $update->title = $request->title;
        $update->save();
        return redirect('/back-footerTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterTitle  $footerTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = FooterTitle::find($id);
        $destroy->delete();
        return redirect('/back-footerTitle');
    }
}
