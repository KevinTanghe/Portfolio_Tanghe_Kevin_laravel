<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Navbar::all();

        return view('backoffice/pages/navbar', compact('navbar'));
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
            'titre' => 'required',
            'chemin' => 'required'
        ]);

        $store = new Navbar;
        $store->chemin = $request->chemin;
        $store->titre = $request->titre;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $edit = Navbar::find($id);

        return view('backoffice/edit/navbarEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validate([
            'chemin' => 'required',
            'titre' => 'required'
        ]);

        $update = Navbar::find($id);
        $update->chemin = $request->chemin;
        $update->titre = $request->titre;
        $update->save();
        return redirect('/back-navbar');
    }

    /**
     * Remove the specified resource from storage.
     *update
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Navbar::find($id);
        $destroy->delete();
        return redirect('/back-navbar');
    }
}
