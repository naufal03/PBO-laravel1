<?php

namespace App\Http\Controllers;

use App\Models\BackendDb;
use Illuminate\Http\Request;

class BackendDbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //function api
        return BackendDb::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BackendDb  $backendDb
     * @return \Illuminate\Http\Response
     */
    public function show(BackendDb $backendDb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BackendDb  $backendDb
     * @return \Illuminate\Http\Response
     */
    public function edit(BackendDb $backendDb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BackendDb  $backendDb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackendDb $backendDb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BackendDb  $backendDb
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackendDb $backendDb)
    {
        //
    }
}
