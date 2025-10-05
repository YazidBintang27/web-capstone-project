<?php

namespace App\Http\Controllers;

use App\Models\Immunization;
use App\Models\Child;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    public function index()
    {
        $immunizations = Immunization::with('child')->latest()->paginate(5);
        return view('immunizations.index', compact('immunizations'));
    }

    public function create()
    {
        $childs = Child::with('mother')->get();
        return view('immunizations.create', compact('childs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:childs,id',
            'vaksin_type' => 'required|string|max:255',
            'immunization_date' => 'required|date',
        ]);

        Immunization::create($request->all());
        return redirect()->route('immunizations.index')->with('success', 'Data imunisasi berhasil ditambahkan!');
    }

    public function edit(Immunization $immunization)
    {
        $childs = Child::with('mother')->get();
        return view('immunizations.edit', compact('immunization', 'childs'));
    }

    public function update(Request $request, Immunization $immunization)
    {
        $request->validate([
            'child_id' => 'required|exists:childs,id',
            'vaksin_type' => 'required|string|max:255',
            'immunization_date' => 'required|date',
        ]);

        $immunization->update($request->all());
        return redirect()->route('immunizations.index')->with('success', 'Data imunisasi berhasil diperbarui!');
    }

    public function destroy(Immunization $immunization)
    {
        $immunization->delete();
        return redirect()->route('immunizations.index')->with('success', 'Data imunisasi berhasil dihapus!');
    }
}
