<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table view_jadwal
        $view_jadwal = DB::table('view_jadwal')->get();
        return view('VJadwalKuliah', ['view_jadwal' => $view_jadwal]);
    }

    public function dashboard()
    {
        // mengambil data dari table view_jadwal
        $view_jadwal = DB::table('view_jadwal')->get();

        // Cek tipe user dan arahkan ke dashboard yang sesuai
        switch(Auth::user()->type) {
            case 'admin':
                return view('adminDashboard', ['view_jadwal' => $view_jadwal]);
            case 'dosen':
                return view('dosenDashboard', ['view_jadwal' => $view_jadwal]);
            default:
                return view('dashboard', ['view_jadwal' => $view_jadwal]);
        }
    }

    // Jika ingin memisahkan method untuk setiap tipe user (opsional)
    public function adminDashboard()
    {
        $view_jadwal = DB::table('view_jadwal')->get();
        return view('adminDashboard', ['view_jadwal' => $view_jadwal]);
    }

    public function dosenDashboard()
    {
        $view_jadwal = DB::table('view_jadwal')->get();
        return view('dosenDashboard', ['view_jadwal' => $view_jadwal]);
    }

    public function mahasiswaDashboard()
    {
        $view_jadwal = DB::table('view_jadwal')->get();
        return view('dashboard', ['view_jadwal' => $view_jadwal]);
    }
}
