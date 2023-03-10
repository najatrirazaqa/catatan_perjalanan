<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

use App\Models\Catatans;

class CatatanPerjalananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function json()
    {
        return Datatables::of(Catatans::all())
            ->addIndexColumn()
            ->make(true);
    }
    public function home()
    {
        return view('layouts.home');
    }
    public function catatan()
    {
        $catatan = DB::table('catatans')->get();
        return view('catatanperjalanan', ['catatanperjalanan' => $catatan]);
    }
    public function create()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required'
        ]);
        DB::table('catatans')->insert([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'suhu_tubuh' => $request->suhu_tubuh
        ]);
        return redirect('/catatan_perjalanan');
    }
}
