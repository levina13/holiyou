<?php

use App\Models\JenisWisatas;
use App\Models\Kecamatans;
use App\Models\ObjekWisatas;
use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/kategori', function (Request $request) {
    if ($request->ajax()) {
            $data = JenisWisatas::orderBy('jenis', 'ASC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $data = [
                        $row->id_jenis_wisata,
                        $row->jenis
                    ];
                    return $data;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
})->name('api.kategori');

Route::get('/kecamatan', function (Request $request) {
    if ($request->ajax()) {
            $data = Kecamatans::orderBy('kecamatan', 'ASC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $data = [
                        $row->id_kecamatan,
                        $row->kecamatan
                    ];
                    return $data;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
})->name('api.kecamatan');

Route::get('/wisata', function (Request $request) {
    if ($request->ajax()) {
            $data = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori')
                        ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
                        ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
                        ->orderBy('objek_wisatas.nama', 'ASC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $data = [
                        $row->id_objek_wisata,
                        $row->nama
                    ];
                    return $data;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
})->name('api.wisata');

Route::get('/jadwal', function(Request $request){
    $id_user = Auth::user()->id;
    if ($request->ajax()) {
        $data = Schedules::select('schedules.*', 'objek_wisatas.nama as nama_objek_wisata', 'gambar_objeks.gambar as gambar')
        ->join('objek_wisatas', 'objek_wisatas.id_objek_wisata', '=', 'schedules.id_objek_wisata')
        ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
        ->where('schedules.id_user', '=', $id_user)
        ->orderBy('schedules.date', 'ASC')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $data = [
                    $row->id_schedule,
                    $row->nama_objek_wisata,
                    $row->gambar,
                    $row->jumlah_orang, 
                    $row->total_anggaran,
                    
                ];
                return $data;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
})->name('api.jadwal');