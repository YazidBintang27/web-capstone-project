<?php

namespace App\Http\Controllers;

use App\Models\Mother;
use Illuminate\Http\Request;

class MotherController extends Controller
{
    public function index()
    {
        $mothers = Mother::latest()->paginate(5);
        return view('mothers.index', compact('mothers'));
    }

    public function create()
    {
        return view('mothers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|unique:mothers,nik',
            'birthdate' => 'nullable|date',
            'address' => 'nullable|string',
        ]);

        Mother::create($request->all());
        return redirect()->route('mothers.index')->with('success', 'Data ibu berhasil ditambahkan!');
    }

    public function edit(Mother $mother)
    {
        return view('mothers.edit', compact('mother'));
    }

    public function update(Request $request, Mother $mother)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|string|unique:mothers,nik,' . $mother->id,
            'birthdate' => 'nullable|date',
            'address' => 'nullable|string',
        ]);

        $mother->update($request->all());
        return redirect()->route('mothers.index')->with('success', 'Data ibu berhasil diperbarui!');
    }

    public function destroy(Mother $mother)
    {
        $mother->delete();
        return redirect()->route('mothers.index')->with('success', 'Data ibu berhasil dihapus!');
    }
}
