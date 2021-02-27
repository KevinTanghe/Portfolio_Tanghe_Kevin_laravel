<?php

namespace App\Http\Controllers;

use App\Models\StrongCard;
use Illuminate\Http\Request;

class StrongCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strongCard = StrongCard::all();

        return view('backoffice/pages/strongCard', compact('strongCard'));
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
            'title' => 'required',
            'content' => 'required'
        ]);

        $store = new StrongCard;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StrongCard  $strongCard
     * @return \Illuminate\Http\Response
     */
    public function show(StrongCard $strongCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StrongCard  $strongCard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = StrongCard::find($id);

        return view('backoffice/edit/strongCardEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StrongCard  $strongCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $update = StrongCard::find($id);
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->content = $request->content;
        $update->save();
        return redirect('/back-strongCard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StrongCard  $strongCard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = StrongCard::find($id);
        $destroy->delete();
        return redirect('/back-strongCard');
    }
}
