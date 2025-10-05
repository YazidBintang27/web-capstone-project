<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mother;
use App\Models\Child;
use App\Models\Weighing;
use App\Models\Immunization;

class DashboardController extends Controller
{
 
    public function index()
    {
        $totalMothers = Mother::count();
        $totalChildren = Child::count();
        $totalWeighings = Weighing::count();
        $totalImmunizations = Immunization::count();

        return view('dashboard.index', compact(
            'totalMothers',
            'totalChildren',
            'totalWeighings',
            'totalImmunizations'
        ));
    }
}
