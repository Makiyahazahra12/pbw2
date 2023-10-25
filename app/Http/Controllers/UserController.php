<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\DataTables\UserDataTable;

// Nama : Makiyah Azahra
// Kelas : D3IF46-03
// NIM : 6706220059

class UserController extends Controller
{
    
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    public function showUser($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    public function create()
    {
        return view('user.registrasi');
    }

    public function edit($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('user.editPengguna', compact('user'));
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request, $username)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'password' => 'nullable|string|min:6',
            'address' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
        ]);

        $user = User::where('username', $username)->firstOrFail();
        $data = [
            'fullname' => $request->fullname,
            'password' => $request->password,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
        ];

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('user.daftarPengguna')->with('success', 'Profil pengguna berhasil diperbarui!');
    }
}