<?php

namespace App\Http\Controllers;

use App\Models\ContactSocial;
use Illuminate\Http\Request;

class ContactSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactSocial = ContactSocial::all();

        return view('backoffice/pages/contactSocial', compact('contactSocial'));
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
            'title' => 'required'
        ]);

        $store = new ContactSocial;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactSocial  $contactSocial
     * @return \Illuminate\Http\Response
     */
    public function show(ContactSocial $contactSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactSocial  $contactSocial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactSocial::find($id);

        return view('backoffice/edit/contactSocialEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactSocial  $contactSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'icon' => 'required',
            'title' => 'required'
        ]);

        $update = ContactSocial::find($id);
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->save();
        return redirect('/back-contactSocial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactSocial  $contactSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactSocial::find($id);
        $destroy->delete();
        return redirect('/back-contactSocial');
    }
}
