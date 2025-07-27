<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil IP pengunjung
        $ip = $request->ip();

        // Cek apakah IP sudah tersimpan hari ini
        $existing = DB::table('pengunjung')
            ->where('ip', $ip)
            ->whereDate('created_at', now()->toDateString())
            ->exists();

        if (!$existing) {
            DB::table('pengunjung')->insert([
                'ip' => $ip,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $totalVisitors = DB::table('pengunjung')->count();
        $todayVisitors = DB::table('pengunjung')->whereDate('created_at',  now()->toDateString())->distinct('ip')->count('ip');
        return view('beranda', compact('totalVisitors', 'todayVisitors'));
    }
}
