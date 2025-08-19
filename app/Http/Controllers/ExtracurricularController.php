<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExtracurricularController extends Controller
{
    // Tampilkan semua eskul dengan info deskripsi dan pengumuman (kalau ada relasi pengumuman)
    public function index()
    {
        $eskuls = Extracurricular::all();
        return view('extracurriculars.index', compact('eskuls'));
    }

    // Detail eskul (deskripsi + pengumuman)
    public function show($id)
    {
        $eskul = Extracurricular::with('forms')->findOrFail($id);
        // kalau ada model Pengumuman, bisa pakai with('announcements') juga

        return view('extracurriculars.show', compact('eskul'));
    }

    // Form daftar eskul (hanya siswa)
    public function create($id)
    {
        $eskul = Extracurricular::findOrFail($id);
        return view('extracurriculars.daftar', compact('eskul'));
    }

    // Simpan data daftar eskul dari siswa
    public function store(Request $request, $id)
    {
        $request->validate([
            'frm_content' => 'required|string|max:1000',
        ]);

        Form::create([
            'frm_content' => $request->frm_content,
            'frm_extracuriculler_id' => $id,
            'frm_user_id' => Auth::id(),
            'frm_status' => 'pending',
            'frm_created_by' => Auth::id(),
        ]);

        return redirect()->route('extracurricular.show', $id)->with('success', 'Berhasil daftar eskul!');
    }
}
