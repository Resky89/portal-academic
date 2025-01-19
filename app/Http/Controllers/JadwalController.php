<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$jadwal_kuliah = DB::table('jadwal_kuliah')->get();
 
    	// mengirim data ke view
    	return view('VJadwal',['jadwal_kuliah' => $jadwal_kuliah]);
 
    }

	public function add(Request $request)
    {
    	DB::table('jadwal_kuliah')->insert([
			'kd_matkul' => $request->kd_matkul,
			'waktu' => $request->waktu,
		]);
		return redirect('/jadwal_kuliah');
    }

	public function hapus(Request $request)
    {
		$id_jadwal=$request->id_jadwal;
		DB::table('jadwal_kuliah')->where('id_jadwal',$id_jadwal)->delete();

		return redirect('/jadwal_kuliah');
 
    }

	public function edit(Request $request)
    {
    	DB::table('jadwal_kuliah')->where('id_jadwal',$request->id_jadwal)->update([
		
			'kd_matkul' => $request->kd_matkul,
			'waktu' => $request->waktu,

		]);
		return redirect('/jadwal_kuliah');
 
    }
}
