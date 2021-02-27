<?php

namespace App\Http\Controllers;

use App\Models\ContactCallLink;
use Illuminate\Http\Request;

class ContactCallLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactCallLink = ContactCallLink::all();

        return view('backoffice/pages/contactCallLink', compact('contactCallLink'));
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
            'phone' => 'required'
        ]);

        $store = new ContactCallLink;
        $store->phone = $request->phone;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactCallLink  $contactCallLink
     * @return \Illuminate\Http\Response
     */
    public function show(ContactCallLink $contactCallLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactCallLink  $contactCallLink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactCallLink::find($id);

        return view('backoffice/edit/contactCallLinkEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactCallLink  $contactCallLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'phone' => 'required'
        ]);

        $update = ContactCallLink::find($id);
        $update->phone = $request->phone;
        $update->save();
        return redirect('/back-contactCallLink');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactCallLink  $contactCallLink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactCallLink::find($id);
        $destroy->delete();
        return redirect('/back-contactCallLink');
    }
}
