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
        return view('extracurriculars.index', [
            'extracurriculars' => Extracurricular::all()
        ]);
    }


    public function createEkskul(){
        return view('extracurriculars.create-extracurricular', [
            'title' => 'tambah ekskul',
        ]);
    }

    public function storeEkskul(Request $request){
        $validated = $request->validate([
            'ext_name' => 'required|max:255',
            'ext_description' => 'nullable',
            'ext_status' => 'required'
        ]);

        Extracurricular::create($validated);
        return redirect('/extracurriculars/manage-extracurricular')->with('succes', 'Berhasil menambahkan ekskul');
    }

    public function delete(Extracurricular $extracurricular){

        Extracurricular::where('ext_id', $extracurricular->ext_id)->delete();

        return redirect('/extracurriculars/manage-extracurricular')->with('succes', 'Data berhasil dihapus');   
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

        return redirect()->route('extracurricular.index')->with('success', 'Pendaftaran ekstrakurikuler berhasil dikirim!');
    }
    public function view(Extracurricular $extracurricular)
    {
        $eskul = Extracurricular::all();
        return view('extracurriculars.view', compact('extracurriculars'));          
    }
}
