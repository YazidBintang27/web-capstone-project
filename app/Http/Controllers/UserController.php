<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('users.index', compact('users'));
    }

   
    public function create()
    {
        $user = auth()->user();

        if ($user->isAdmin()) {
            $availableRoles = ['kepala_posyandu', 'kader'];
        } elseif ($user->isKepalaPosyandu()) {
            $availableRoles = ['kader'];
        } else {
            abort(403, 'Anda tidak memiliki izin untuk membuat user.');
        }

        return view('users.create', compact('availableRoles'));
    }

   
    public function store(Request $request)
    {
        $user = auth()->user();

        $allowedRoles = [];
        if ($user->isAdmin()) {
            $allowedRoles = ['kepala_posyandu', 'kader'];
        } elseif ($user->isKepalaPosyandu()) {
            $allowedRoles = ['kader'];
        }

        if (empty($allowedRoles)) {
            abort(403, 'Anda tidak memiliki izin untuk membuat user.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:100|unique:users,username',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'profile_picture' => 'nullable|string',
            'password' => 'required|min:6|confirmed',
            'role' => ['required', Rule::in($allowedRoles)],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User berhasil dibuat.');
    }

    public function edit(User $user)
    {
        $currentUser = auth()->user();

        if ($currentUser->isKader()) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit user.');
        }

        if ($currentUser->isKepalaPosyandu() && $user->role !== 'kader') {
            abort(403, 'Kepala Posyandu hanya dapat mengedit Kader.');
        }

        $availableRoles = $currentUser->isAdmin() ? ['kepala_posyandu', 'kader'] : ['kader'];

        return view('users.edit', compact('user', 'availableRoles'));
    }

    public function update(Request $request, User $user)
    {
        $currentUser = auth()->user();

        if ($currentUser->isKader()) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit user.');
        }

        if ($currentUser->isKepalaPosyandu() && $user->role !== 'kader') {
            abort(403, 'Kepala Posyandu hanya dapat mengedit Kader.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'username' => ['required', 'string', 'max:100', Rule::unique('users')->ignore($user->id)],
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'profile_picture' => 'nullable|string',
            'password' => 'nullable|min:6|confirmed',
            'role' => ['required', Rule::in(['kepala_posyandu', 'kader'])],
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
    }

    
    public function destroy(User $user)
    {
        $currentUser = auth()->user();

        if ($currentUser->isKader()) {
            abort(403, 'Anda tidak memiliki izin untuk menghapus user.');
        }

        if ($currentUser->isKepalaPosyandu() && $user->role !== 'kader') {
            abort(403, 'Kepala Posyandu hanya dapat menghapus Kader.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}
