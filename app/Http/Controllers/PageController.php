<?php

namespace App\Http\Controllers;

use App\Models\ObjekWisatas;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $wisatas = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
            ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
            ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
            ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
            ->orderBy('objek_wisatas.created_at', 'DESC')->take(4)->get();
        return view('pages.index', ['wisatas' => $wisatas]);
    }

    public function listWisata()
    {
        $wisatas = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
            ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
            ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
            ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
            ->orderBy('objek_wisatas.created_at', 'DESC')->paginate(8);
        return view('pages.wisatas.list', ['wisatas' => $wisatas]);
    }

    public function wisata($id)
    {
        $wisata = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
            ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
            ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
            ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
            ->where('objek_wisatas.id_objek_wisata', $id)->first();
        return view('pages.wisatas.index', [
            'wisata'    => $wisata
        ]);
    }

    public function lokasi($id)
    {
        $wisata = ObjekWisatas::select('*')
            ->where('id_objek_wisata', $id)->first();
        return view('pages.wisatas.lokasi', [
            'wisata'    => $wisata
        ]);
    }
}
