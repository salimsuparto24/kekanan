<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // List karyawan
    public function index()
    {
        $Karyawans = Karyawan::latest()->paginate(10);
        return view('admin.Karyawans.index', compact('Karyawans'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.Karyawans.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|string|max:100',
            'email'     => 'required|email|unique:Karyawans',
            'jabatan'     => 'nullable|string|max:100',
            'telepon'  => 'nullable|string|max:20',
            'tanggal_masuk' => 'nullable|date',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('admin.Karyawans.index')->with('success', 'Karyawan berhasil ditambahkan');
    }

    // Form edit
    public function edit(Karyawan $karyawan)
    {
        return view('admin.Karyawans.edit', compact('karyawan'));
    }

    // Update data
    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama'      => 'required|string|max:100',
            'email'     => 'required|email|unique:Karyawans',
            'jabatan'     => 'nullable|string|max:100',
            'telepon'  => 'nullable|string|max:20',
            'tanggal_masuk' => 'nullable|date',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('admin.Karyawans.index')->with('success', 'Data karyawan berhasil diperbarui');
    }

    // Hapus data
    public function destroy(Karyawan $Karyawan)
    {
        $Karyawan->delete();
        return redirect()->route('admin.karyawans.index')->with('success', 'Karyawan berhasil dihapus');
    }
}
