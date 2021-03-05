<?php

namespace App\Http\Controllers;

use App\Models\ContactTitle;
use Illuminate\Http\Request;

class ContactTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactTitle = ContactTitle::all();

        return view('backoffice/pages/contactTitle', compact('contactTitle'));
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

        $store = new ContactTitle;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function show(ContactTitle $contactTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactTitle::find($id);

        return view('backoffice/edit/contactTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'icon' => 'required',
            'title' => 'required'
        ]);

        $update = ContactTitle::find($id);
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->save();
        return redirect('/back-contactTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactTitle  $contactTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactTitle::find($id);
        $destroy->delete();
        return redirect('/back-contactTitle');
    }
}
