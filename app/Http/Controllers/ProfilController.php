<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function profil()
    {
        $user = Auth::user()->id;
        return view('user/profil',compact('user'));
    }

    public function SimpanData(Request $request)
    {
        $data = User::findOrFail($request->id);

        $data->update([
                'tgl_meninggal' => $request->tgl_meninggal,
                'alamat_meninggal' => $request->alamat_meninggal,
                'kecamatan_meninggal' => $request->kecamatan_meninggal,
                'kelurahan_meninggal' => $request->kelurahan_meninggal,
                'notelp_ahwa' => $request->notelp_ahwa,
                'alamat_ahwa' => $request->alamat_ahwa,
                'nik_ahwa' => $request->nik_ahwa,
                'nama_ahwa' => $request->nama_ahwa,
                'kecamatan_ahwa' => $request->kecamatan_ahwa,
                'kelurahan_ahwa' => $request->kelurahan_ahwa,
                'kedudukan' => $request->kedudukan
        ]);

        return redirect('user/profil')->with('success','Data berhasil disimpan');

    }

    public function updateProfile(Request $request, $id)
    {
        $data = User::find($id);

        $data->update([
            'user_id'=>$request->id,
            'tgl_meninggal'=>$request->tgl_meninggal,
            'alamat_meninggal'=>$request->alamat_meninggal,
            'kelurahan_meninggal'=>$request->kelurahan_meninggal,
            'kecamatan_meninggal'=>$request->kecamatan_meninggal,
            'alamat_ahwa'=>$request->alamat_ahwa,
            'notelp_ahwa'=>$request->notelp_ahwa,
            'nik_ahwa'=>$request->nik_ahwa,
            'nama_ahwa'=>$request->nama_ahwa,
            'kelurahan_ahwa'=>$request->kelurahan_ahwa,
            'kecamatan_ahwa'=>$request->kecamatan_ahwa,
            'kedudukan'=>$request->kedudukan,

        ]);

        return redirect('profil')->with('success','Data berhasil disimpan');

    }


}
