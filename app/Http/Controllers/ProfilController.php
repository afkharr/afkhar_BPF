<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Menggunakan File facade untuk hapus berkas fisik

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        // Mengarah ke resources/views/admin/CV/Dashboard.blade.php
        return view('admin.CV.Dashboard', compact('profils'));
    }

    public function create()
    {
        // Mengarah ke resources/views/admin/CV/create.blade.php
        return view('admin.CV.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            // Perbaikan: Menyesuaikan ke nama tabel baru portofolio_301012
            'nim' => 'required|string|unique:portofolio_301012,nim',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tentang_saya' => 'required',
            'email' => 'required|email',
        ]);

        $file = $request->file('foto');
        $nama_foto = time() . '_' . $file->getClientOriginalName();

        // Perbaikan: Pindahkan foto secara fisik langsung ke folder public/storage/foto_profil/
        $file->move(public_path('storage/foto_profil'), $nama_foto);

        Profil::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'foto' => $nama_foto,
            'tentang_saya' => $request->tentang_saya,
            'email' => $request->email,
        ]);

        return redirect()->route('profil.index')->with('success', 'Profil baru berhasil ditambahkan!');
    }

    public function show(Profil $profil)
    {
        // Perbaikan: Dikembalikan mengarah ke resources/views/admin/CV/show.blade.php agar membuka landing page CV
        return view('admin.CV.index', compact('profil'));
    }

    public function edit(Profil $profil)
    {
        // Mengarah ke resources/views/admin/CV/edit.blade.php
        return view('admin.CV.edit', compact('profil'));
    }

    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            // Perbaikan: Menyesuaikan ke nama tabel baru portofolio_301012 dan mengabaikan ID sendiri saat edit
            'nim' => 'required|string|unique:portofolio_301012,nim,' . $profil->id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tentang_saya' => 'required',
            'email' => 'required|email',
        ]);

        $data = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'tentang_saya' => $request->tentang_saya,
            'email' => $request->email,
        ];

        if ($request->hasFile('foto')) {
            // Perbaikan: Hapus foto lama langsung dari folder public/storage/foto_profil/ jika filenya ada
            if ($profil->foto && File::exists(public_path('storage/foto_profil/' . $profil->foto))) {
                File::delete(public_path('storage/foto_profil/' . $profil->foto));
            }

            $file = $request->file('foto');
            $nama_foto = time() . '_' . $file->getClientOriginalName();

            // Perbaikan: Pindahkan foto baru ke folder manual public/storage/foto_profil/
            $file->move(public_path('storage/foto_profil'), $nama_foto);

            $data['foto'] = $nama_foto;
        }

        $profil->update($data);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui!');
    }

    public function destroy(Profil $profil)
    {
        // Perbaikan: Hapus file foto fisik secara langsung dari public/storage/foto_profil/ saat data dihapus
        if ($profil->foto && File::exists(public_path('storage/foto_profil/' . $profil->foto))) {
            File::delete(public_path('storage/foto_profil/' . $profil->foto));
        }

        $profil->delete();

        return redirect()->route('profil.index')->with('success', 'Profil berhasil dihapus!');
    }
}
