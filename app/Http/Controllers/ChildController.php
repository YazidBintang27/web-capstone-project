<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Mother;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $childs = Child::with('mother')->latest()->paginate(5);
        return view('childs.index', compact('childs'));
    }

    public function create()
    {
        $mothers = Mother::all();
        return view('childs.create', compact('mothers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mother_id' => 'required|exists:mothers,id',
            'name' => 'required|string|max:255',
            'birthdate' => 'nullable|date',
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'nutritional_status' => 'nullable|string',
            'gender' => 'required|in:L,P',
        ]);

        Child::create($request->all());
        return redirect()->route('childs.index')->with('success', 'Data anak berhasil ditambahkan!');
    }

    public function edit(Child $child)
    {
        $mothers = Mother::all();
        return view('childs.edit', compact('child', 'mothers'));
    }

    public function update(Request $request, Child $child)
    {
        $request->validate([
            'mother_id' => 'required|exists:mothers,id',
            'name' => 'required|string|max:255',
            'birthdate' => 'nullable|date',
            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'nutritional_status' => 'nullable|string',
            'gender' => 'required|in:L,P',
        ]);

        $child->update($request->all());
        return redirect()->route('childs.index')->with('success', 'Data anak berhasil diperbarui!');
    }

    public function destroy(Child $child)
    {
        $child->delete();
        return redirect()->route('childs.index')->with('success', 'Data anak berhasil dihapus!');
    }
}
