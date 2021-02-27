<?php

namespace App\Http\Controllers;

use App\Models\PortfolioTitle;
use Illuminate\Http\Request;

class PortfolioTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $folioTitle = PortfolioTitle::all();

        return view('backoffice/pages/portfolioTitle', compact('folioTitle'));
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
            'ombreTitle' => 'required',
            'title' => 'required',
            'sousTitle' => 'required'
        ]);

        $store = new PortfolioTitle;
        $store->ombreTitle = $request->ombreTitle;
        $store->title = $request->title;
        $store->sousTitle = $request->sousTitle;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioTitle $portfolioTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PortfolioTitle::find($id);

        return view('backoffice/edit/portfolioTitleEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'ombreTitle' => 'required',
            'title' => 'required',
            'sousTitle' => 'required'
        ]);

        $update = PortfolioTitle::find($id);
        $update->ombreTitle = $request->ombreTitle;
        $update->title = $request->title;
        $update->sousTitle = $request->sousTitle;
        $update->save();
        return redirect('/back-portfolioTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioTitle  $portfolioTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = PortfolioTitle::find($id);
        $destroy->delete();
        return redirect('/back-portfolioTitle');
    }
}
