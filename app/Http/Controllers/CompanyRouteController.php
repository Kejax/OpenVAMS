<?php

namespace App\Http\Controllers;

use App\Models\CompanyRoute;
use Illuminate\Http\Request;

class CompanyRouteController extends Controller
{

    public function index() {
        return view('routes.index', ['routes' => CompanyRoute::all()]);
    }

    public function create(Request $request) {

        if ($request->method() == 'POST') {
            $routeData = $request->validate([

            ]);
        }

        return view('routes.create');

    }

}
