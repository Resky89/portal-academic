<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
	public function index()
    {
        // mengambil data dari table
        $nilai = DB::table('nilai_mhs')->get();
    
        // mengirim data ke view
        return view('VNilaiMhs', ['nilai' => $nilai]);
    }

    public function add(Request $request)
    {
        // Insert data
        DB::table('nilai_mhs')->insert([
            'nama_mhs' => $request->nama_mhs,
            'kd_matkul' => $request->kd_matkul,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'kehadiran' => $request->kehadiran,
            'keaktifan' => $request->keaktifan,
            'tugas' => $request->tugas,
            'sks' => $request->sks,
        ]);

        return redirect('/nilai');
    }

    public function hapus(Request $request)
    {
        $id_nilai = $request->id_nilai;

        // Menghapus data
        DB::table('nilai_mhs')->where('id_nilai', $id_nilai)->delete();

        return redirect('/nilai')->with('success', 'Data berhasil dihapus');
    }
    public function edit(Request $request)
    {
        DB::table('nilai_mhs')->where('id_nilai', $request->id_nilai)->update([
            'nama_mhs' => $request->nama_mhs,
            'kd_matkul' => $request->kd_matkul,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'kehadiran' => $request->kehadiran,
            'keaktifan' => $request->keaktifan,
            'tugas' => $request->tugas,
            'sks' => $request->sks,
        ]);

        return redirect('/nilai');
    }
}