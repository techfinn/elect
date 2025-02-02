<?php

namespace App\Http\Controllers;

use App\Models\ard;
use Illuminate\Http\Request;

class ArdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $val = ard::all();
        return view('arduino.dashboard',['values'=> $val]);
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
        //


        $data = ard::find(1);
        $data->value = $request->On;
        $data->save();

return redirect('/ard/val');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ard  $ard
     * @return \Illuminate\Http\Response
     */
    public function show(ard $ard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ard  $ard
     * @return \Illuminate\Http\Response
     */
    public function edit(ard $ard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ard  $ard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ard $ard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ard  $ard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ard $ard)
    {
        //
    }
}
