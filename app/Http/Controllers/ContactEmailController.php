<?php

namespace App\Http\Controllers;

use App\Models\ContactEmail;
use Illuminate\Http\Request;

class ContactEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactEmail = ContactEmail::all();

        return view('backoffice/pages/contactEmail', compact('contactEmail'));
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

        $store = new ContactEmail;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function show(ContactEmail $contactEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactEmail::find($id);

        return view('backoffice/edit/contactEmailEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'icon' => 'required',
            'title' => 'required'
        ]);

        $update = ContactEmail::find($id);
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->save();
        return redirect('/back-contactEmail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactEmail  $contactEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactEmail::find($id);
        $destroy->delete();
        return redirect('/back-contactEmail');
    }
}
