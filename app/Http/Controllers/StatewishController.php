<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statewish;

class StatewishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submitwish');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'contact'     =>  'required',
            'age'     =>  'required',
            'city'     =>  'required',
            'wish'     =>  'required'
        ]);
        $statewish = new Statewish([
            'name'    =>  $request->get('name'),
            'contact'    =>  $request->get('contact'),
            'age'    =>  $request->get('age'),
            'city'    =>  $request->get('city'),
            'wish'    =>  $request->get('wish')
       ]);
        $statewish->save();
        return redirect()->route('statewish.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
