<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSettings;
use Illuminate\Http\Request;

class ApplicationSettingsController extends Controller
{

    public function index(Request $request) {

        return view('admin.settings');

    }

}
