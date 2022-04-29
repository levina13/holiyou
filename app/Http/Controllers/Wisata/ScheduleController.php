<?php

namespace App\Http\Controllers\Wisata;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Schedules;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user=Auth::user()->id;
        
        $validator = Validator::make($request->all(), [
            'jumlah_orang' => 'required',
            'id_objek_wisata' => 'required',
            'total_anggaran' => 'required',
            'tanggal'=>'required|after:today'
        ]);

        if ($validator->passes()) {
            // $total_harga = $request->harga * $request->jumlah_orang;
            $pesanan          = new Schedules();
            $pesanan->jumlah_orang   = $request->jumlah_orang;
            $pesanan->total_anggaran = $request->total_anggaran;
            $pesanan->id_objek_wisata = $request->id_objek_wisata;
            $pesanan->id_user = $id_user;
            if ($pesanan->save()) {
                return response()->json(['success' => 'Berhasil Memesan tiket.']);   
            }
        }else{
            return response()->json(['error' => $validator->errors()->all()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
