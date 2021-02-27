<?php

namespace App\Http\Controllers;

use App\Models\FooterLink;
use Illuminate\Http\Request;

class FooterLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footerLink = FooterLink::all();

        return view('backoffice/pages/footerLink', compact('footerLink'));
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
            'lien' => 'required',
            'name' => 'required',
            'icon' => 'required'
        ]);

        $store = new FooterLink;
        $store->lien = $request->lien;
        $store->name = $request->name;
        $store->icon = $request->icon;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FooterLink  $footerLink
     * @return \Illuminate\Http\Response
     */
    public function show(FooterLink $footerLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterLink  $footerLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = FooterLink::find($id);

        return view('backoffice/edit/footerLinkEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterLink  $footerLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'lien' => 'required',
            'name' => 'required',
            'icon' => 'required'
        ]);

        $update = FooterLink::find($id);
        $update->lien = $request->lien;
        $update->name = $request->name;
        $update->icon = $request->icon;
        $update->save();
        return redirect('/back-footerLink');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterLink  $footerLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = FooterLink::find($id);
        $destroy->delete();
        return redirect('/back-footerLink');
    }
}
