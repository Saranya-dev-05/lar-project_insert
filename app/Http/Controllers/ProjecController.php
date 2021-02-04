<?php

namespace App\Http\Controllers;

use App\Models\projec;
use Illuminate\Http\Request;

class ProjecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project');
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
        $request->validate([
            'p_number' => 'required',
            'p_name' => 'required',
            'p_lead' => 'required',
            'status' => 'required',
            'price' => 'required',
        ]);
        projec::create($request->all());
        return redirect()->route('index')
                         ->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projec  $projec
     * @return \Illuminate\Http\Response
     */
    public function show(projec $projec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projec  $projec
     * @return \Illuminate\Http\Response
     */
    public function edit(projec $projec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projec  $projec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projec $projec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projec  $projec
     * @return \Illuminate\Http\Response
     */
    public function destroy(projec $projec)
    {
        //
    }
}
