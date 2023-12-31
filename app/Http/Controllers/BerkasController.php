<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerkasController extends Controller
{
    public function uploadFile(Request $request)
{
    $request->validate([
        'surat_pengantar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'ktp_meninggal' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'surat_ahwa' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'kk_meninggal' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'surat_tdk_mampu' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'ktp_ahwa' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'akte_meninggal' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'kk_ahwa' => 'required|image|mimes:jpeg,png,jpg|max:2048',

    ]);

    $berkas = new Berkas();
    $berkas->user_id = Auth::user()->id;

    // Simpan berkas ke storage
    $berkas->surat_pengantar = $request->file('surat_pengantar')->store('berkas');
    $berkas->ktp_meninggal = $request->file('ktp_meninggal')->store('berkas');
    $berkas->surat_ahwa = $request->file('surat_ahwa')->store('berkas');
    $berkas->kk_meninggal = $request->file('kk_meninggal')->store('berkas');
    $berkas->surat_tdk_mampu = $request->file('surat_tdk_mampu')->store('berkas');
    $berkas->ktp_ahwa = $request->file('ktp_ahwa')->store('berkas');
    $berkas->akte_meninggal = $request->file('akte_meninggal')->store('berkas');
    $berkas->kk_ahwa = $request->file('kk_ahwa')->store('berkas');
    // ... tambahkan penyimpanan untuk berkas lainnya

    // Simpan berkas ke database
    $berkas->save();

    return redirect()->back()->with('success', 'Berkas berhasil diupload.');
    }

    public function showUploadForm()
{
    return view('user/uploadberkas');
}
}
