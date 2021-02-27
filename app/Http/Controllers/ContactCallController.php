<?php

namespace App\Http\Controllers;

use App\Models\ContactCall;
use Illuminate\Http\Request;

class ContactCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactCall = ContactCall::all();

        return view('backoffice/pages/contactCall', compact('contactCall'));
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

        $store = new ContactCall;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactCall  $contactCall
     * @return \Illuminate\Http\Response
     */
    public function show(ContactCall $contactCall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactCall  $contactCall
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ContactCall::find($id);

        return view('backoffice/edit/contactCallEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactCall  $contactCall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'icon' => 'required',
            'title' => 'required'
        ]);

        $update = ContactCall::find($id);
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->save();
        return redirect('/back-contactCall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactCall  $contactCall
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ContactCall::find($id);
        $destroy->delete();
        return redirect('/back-contactCall');
    }
}
