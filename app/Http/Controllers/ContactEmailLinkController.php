<?php

namespace App\Http\Controllers;

use App\Models\ContactEmailLink;
use Illuminate\Http\Request;

class ContactEmailLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactEmailLink = ContactEmailLink::all();

        return view('backoffice/pages/contactEmailLink', compact('contactEmailLink'));
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
            'mail' => 'required'
        ]);

        $store = new ContactEmailLink;
        $store->mail = $request->mail;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactEmailLink  $contactEmailLink
     * @return \Illuminate\Http\Response
     */
    public function show(ContactEmailLink $contactEmailLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactEmailLink  $contactEmailLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactEmailLink::find($id);

        return view('backoffice/edit/contactEmailLinkEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactEmailLink  $contactEmailLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'mail' => 'required'
        ]);

        $update = ContactEmailLink::find($id);
        $update->mail = $request->mail;
        $update->save();
        return redirect('/back-contactEmailLink');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactEmailLink  $contactEmailLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactEmailLink::find($id);
        $destroy->delete();
        return redirect('/back-contactEmailLink');
    }
}
