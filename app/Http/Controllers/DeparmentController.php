<?php

namespace App\Http\Controllers;

use App\Models\Deparment;
use App\Http\Requests\StoreDeparmentRequest;
use App\Http\Requests\UpdateDeparmentRequest;

class DeparmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Deparment::all();
        return view('dashboard.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeparmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Deparment $deparment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deparment $deparment)
    {
        $departments = Deparment::all();
        return view('dashboard.department.edit', compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeparmentRequest $request, Deparment $deparment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deparment $deparment)
    {
        //
    }
}
