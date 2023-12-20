<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;

class RouteController extends Controller
{
    
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));
    }


    public function create()
    {
        return view('routes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'path' => 'required|string',
        ]);

        Route::create($request->all());

        return redirect('/routes')->with('success', 'Route created successfully!');
    }





}
