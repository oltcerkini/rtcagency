<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a single service (EXACTLY like ProjectController)
     */
    public function show($id)
    {
        $service = Service::published()->findOrFail($id);
        
        return view('services.single', compact('service'));
    }
}