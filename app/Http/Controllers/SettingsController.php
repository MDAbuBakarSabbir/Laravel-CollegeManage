<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(){
        return view('dashboard.settings.index');
    }
    public function loackscreen(){
        return view('dashboard.settings.lockscreen');
    }
}
