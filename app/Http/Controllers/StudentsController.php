<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.students.computer.computer');
    }
    public function computer()
    {
        return view('dashboard.students.computer.computer');
    }
    public function civil()
    {
        return view('dashboard.students.civil.civil');
    }
    public function electrical()
    {
        return view('dashboard.students.electrical.electrical');
    }
    public function textile()
    {
        return view('dashboard.students.textile.textile');
    }
    public function mechanical()
    {
        return view('dashboard.students.methanical.mechanical');
    }
    public function nursing()
    {
        return view('dashboard.students.nursing.nursing');
    }

    // public function semester3_4()
    // {
    //     return view('dashboard.students.semester.1st');
    // }
    // public function semester5_6()
    // {
    //     return view('dashboard.students.semester.2nd');
    // }
    // public function semester7_8()
    // {
    //     return view('dashboard.students.semester.3rd');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.students.create');
    }
    public function login()
    {
        return view('dashboard.students.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashboard.students.show');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('dashboard.students.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
