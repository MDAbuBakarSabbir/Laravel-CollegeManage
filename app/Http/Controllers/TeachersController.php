<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use App\Http\Requests\StoreTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;
use App\Models\Deparment;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teachers::all();
        return view('dashboard.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Deparment::all();
        return view('dashboard.teachers.create',compact('departments'));
    }
    public function login()
    {
        return view('dashboard.teachers.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeachersRequest $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:teachers|email',
            'address' => 'required',
            'department' => 'required',
        ]);
        Teachers::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'department' => $request->depertment,
            'created_at' => now(),
        ]);
        return back()->with('success', 'New Teacher Add Successfull');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashboard.teachers.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeachersRequest $request)
    {
        $manager = new ImageManager(new Driver());

        // $newname = Teachers::teacher('id') . Str::random(5) . $request->file('image')->getClientOriginalExtension();
        // $image = $manager->read($request->file('image'));
        // $image->toPng()->save(base_path('public/dashboard/images/teachers/uploads/'.$newname));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

    }
    public function status()
    {

    }
}
