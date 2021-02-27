<?php

namespace App\Http\Controllers;

use App\Models\ResumeSumaryContent;
use Illuminate\Http\Request;

class ResumeSumaryContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumeSumaryContent = ResumeSumaryContent::all();

        return view('backoffice/pages/resumeSumaryContent', compact('resumeSumaryContent'));
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
            'content' => 'required'
        ]);

        $store = new ResumeSumaryContent;
        $store->content = $request->content;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResumeSumaryContent  $resumeSumaryContent
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeSumaryContent $resumeSumaryContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResumeSumaryContent  $resumeSumaryContent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ResumeSumaryContent::find($id);

        return view('backoffice/edit/resumeSumaryContentEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResumeSumaryContent  $resumeSumaryContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'content' => 'required'
        ]);

        $update = ResumeSumaryContent::find($id);
        $update->content = $request->content;
        $update->save();
        return redirect('/back-resumeSumaryContent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResumeSumaryContent  $resumeSumaryContent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ResumeSumaryContent::find($id);
        $destroy->delete();
        return redirect('/back-resumeSumaryContent');
    }
}
