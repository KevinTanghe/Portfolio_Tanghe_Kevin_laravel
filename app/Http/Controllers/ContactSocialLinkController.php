<?php

namespace App\Http\Controllers;

use App\Models\ContactSocialLink;
use Illuminate\Http\Request;

class ContactSocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactSocialLink = ContactSocialLink::all();

        return view('backoffice/pages/contactSocialLink', compact('contactSocialLink'));
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
            'icon' => 'required',
        ]);

        $store = new ContactSocialLink;
        $store->lien = $request->lien;
        $store->name = $request->lien;
        $store->icon = $request->lien;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactSocialLink  $contactSocialLink
     * @return \Illuminate\Http\Response
     */
    public function show(ContactSocialLink $contactSocialLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactSocialLink  $contactSocialLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactSocialLink::find($id);

        return view('backoffice/edit/contactSocialLinkEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactSocialLink  $contactSocialLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'lien' => 'required',
            'name' => 'required',
            'icon' => 'required'
        ]);

        $update = ContactSocialLink::find($id);
        $update->lien = $request->lien;
        $update->name = $request->name;
        $update->icon = $request->icon;
        $update->save();
        return redirect('/back-contactSocialLink');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactSocialLink  $contactSocialLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactSocialLink::find($id);
        $destroy->delete();
        return redirect('/back-contactSocialLink');
    }
}
