<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Requests\MobileRequest;
use App\Mobile;
use http\Env\Response;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiles = Mobile::all();
        return view('mobiles.all', compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobiles.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MobileRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MobileRequest $request)
    {
        $mobile = Mobile::create($request->except('_token', '_method'));
        return redirect()->route('mobiles.index')->withStatus($mobile->name . ' added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param Mobile $mobile
     * @return \Illuminate\Http\Response
     */
    public function show(Mobile $mobile)
    {
        return view('mobiles.show', compact('mobile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Mobile $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobile $mobile)
    {
        return view('mobiles.edit', compact('mobile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MobileRequest $request, Mobile $mobile)
    {
        $mobile->update($request->except('_token', '_method'));
        return redirect()->route('mobiles.index')->withStatus($mobile->name . ' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Mobile $mobile
     * @return void
     * @throws \Exception
     */
    public function destroy(Mobile $mobile)
    {
        $mobile->delete();
        return redirect()->route('mobiles.index')->with('status', $mobile->name . ' deleted successfully');
    }
}
