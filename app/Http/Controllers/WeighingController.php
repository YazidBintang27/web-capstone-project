<?php

namespace App\Http\Controllers;

use App\Models\Weighing;
use App\Models\Mother;
use App\Models\Child;
use Illuminate\Http\Request;

class WeighingController extends Controller
{
 
    public function index()
    {
        $weighings = Weighing::with(['mother', 'child'])->latest()->paginate(5);
        return view('weighings.index', compact('weighings'));
    }

  
    public function create()
    {
        $mothers = Mother::all();
        $childs = Child::all();
        return view('weighings.create', compact('mothers', 'childs'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'mother_id' => 'required',
            'child_id' => 'required',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'lingkar_kepala' => 'nullable|numeric',
            'lingkar_badan' => 'nullable|numeric',
            'weighing_date' => 'required|date',
        ]);

        Weighing::create($request->all());

        return redirect()->route('weighings.index')->with('success', 'Data penimbangan berhasil ditambahkan!');
    }

 
    public function edit(Weighing $weighing)
    {
        $mothers = Mother::all();
        $childs = Child::all();
        return view('weighings.edit', compact('weighing', 'mothers', 'childs'));
    }


    public function update(Request $request, Weighing $weighing)
    {
        $request->validate([
            'mother_id' => 'required',
            'child_id' => 'required',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'lingkar_kepala' => 'nullable|numeric',
            'lingkar_badan' => 'nullable|numeric',
            'weighing_date' => 'required|date',
        ]);

        $weighing->update($request->all());

        return redirect()->route('weighings.index')->with('success', 'Data penimbangan berhasil diperbarui!');
    }

  
    public function destroy(Weighing $weighing)
    {
        $weighing->delete();
        return redirect()->route('weighings.index')->with('success', 'Data penimbangan berhasil dihapus!');
    }
}
