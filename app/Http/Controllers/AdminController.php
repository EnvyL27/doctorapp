<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $datap = DB::table('users')->where('is_admin', 0)->count();
        $datamr = DB::table('medical_record')->count();
        $datam = DB::table('medicine')->count();
        // opsional yang datat menunggu table yang digunakan untuk menaruh data transaksu baru bisa dihitung
        return view('doctor.dashboard', [
            "title" => 'Dashboard',
            "datap" => $datap,
            "datamr" => $datamr,
            "datam" => $datam
        ]);
    }
}
