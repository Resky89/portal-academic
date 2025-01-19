<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$matkul = DB::table('matkul')->get();
 
    	// mengirim data ke view
    	return view('VMatkul',['matkul' => $matkul]);
 
    }

	public function add(Request $request)
    {
    	DB::table('matkul')->insert([
			'kd_matkul' => $request->kd_matkul,
			'matkul' => $request->matkul,
			'prodi' => $request->prodi,
			'kelas' => $request->kelas,
			'dosen' => $request->dosen,

		]);
		return redirect('/matkul');
    }

	public function hapus(Request $request)
    {
		$kd_matkul=$request->kd_matkul;
		DB::table('matkul')->where('kd_matkul',$kd_matkul)->delete();

		return redirect('/matkul');
 
    }

	public function edit(Request $request)
    {
    	DB::table('matkul')->where('kd_matkul',$request->kd_matkul)->update([
		
			'matkul' => $request->matkul,
			'prodi' => $request->prodi,
			'kelas' => $request->kelas,
			'dosen' => $request->dosen,

		]);
		return redirect('/matkul');
 
    }
}