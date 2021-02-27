<?php

namespace App\Http\Controllers;

use App\Models\PortfolioGallery;
use Illuminate\Http\Request;

class PortfolioGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioGallery = PortfolioGallery::all();

        return view('backoffice/pages/portfolioGallery', compact('portfolioGallery'));
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
            'img' => 'required',
            'title' => 'required'
        ]);

        $store = new PortfolioGallery;
        $store->img = $request->img;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioGallery  $portfolioGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioGallery $portfolioGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioGallery  $portfolioGallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PortfolioGallery::find($id);

        return view('backoffice/edit/portfolioGalleryEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioGallery  $portfolioGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'img' => 'required',
            'title' => 'required'
        ]);

        $update = PortfolioGallery::find($id);
        $update->img = $request->img;
        $update->title = $request->title;
        $update->save();
        return redirect('/back-portfolioGallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioGallery  $portfolioGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = PortfolioGallery::find($id);
        $destroy->delete();
        return redirect('/back-portfolioGallery');
    }
}
