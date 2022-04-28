<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class phoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = Phone::all();
        return $phone;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone = new Phone();
        $phone->name = $request->name;
        $phone->brand = $request->brand;
        $phone->os = $request->os;
        $phone->processor = $request->processor;
        $phone->display = $request->display;
        $phone->memory = $request->memory;
        $phone->battery = $request->battery;
        $phone->price = $request->price;
        $phone->save();

        return $phone;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::findOrFail($id);
        return $phone;
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();
    }

    public function phonesRss()
    {
        $phones = Phone::all();
        return response()->view('rss.feed', compact('phones'))->header('Content-Type', 'application/xml');
    }
}
