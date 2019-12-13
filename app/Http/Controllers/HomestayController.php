<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class HomestayController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$homestay = DB::table('homestay')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tabel1',['homestay' => $homestay]);
 
    }
    public function tambah(){
        return view('tambah');
    }
    // method untuk insert data ke table homestay
    public function kirim(Request $request)
    {
        // insert data ke table homestay
        DB::table('homestay')->insert([
            'homestay_nama' => $request->homestay_nama,
            'homestay_alamat' => $request->homestay_alamat,
            'homestay_kota' => $request->homestay_kota,
            'homestay_pemilik' => $request->homestay_pemilik,
            'homestay_jumlah_kamar' => $request->homestay_jumlah_kamar,
            'homestay_harga_tertinggi' => $request->homestay_harga_tertinggi,
            'homestay_harga_terendah' =>$request->homestay_harga_terendah,
            'homestay_telepon' => $request->homestay_telepon,
            'homestay_foto' => $request->homestay_foto
            ]);
        // alihkan halaman ke halaman homestay
        return redirect('/tabel1');
        
        
 
    }
    // method untuk edit data homestay
    public function edit($id)
    {
        // mengambil data homestay berdasarkan id yang dipilih
        $homestay = DB::table('homestay')->where('homestay_id',$id)->get();
        // passing data homestay yang didapat ke view edithomestay.blade.php
        return view('edithomestay',['homestay' => $homestay]);
 
    }
    // update data homestay
    public function update(Request $request)
    {
	    // update data homestay
        DB::table('homestay')->where('homestay_id',$request->id)->update([
            'homestay_nama' => $request->homestay_nama,
            'homestay_alamat' => $request->homestay_alamat,
            'homestay_kota' => $request->homestay_kota,
            'homestay_pemilik' => $request->homestay_pemilik,
            'homestay_jumlah_kamar' => $request->homestay_jumlah_kamar,
            'homestay_harga_tertinggi' => $request->homestay_harga_tertinggi,
            'homestay_harga_terendah' =>$request->homestay_harga_terendah,
            'homestay_telepon' => $request->homestay_telepon,
            'homestay_foto' => $request->homestay_foto
        ]);
        // alihkan halaman ke halaman homestay
        return redirect('/tabel1');
    }
    // method untuk hapus data homestay
    public function hapus($id)
    {
        // menghapus data homestay berdasarkan id yang dipilih
        DB::table('homestay')->where('homestay_id',$id)->delete();
            
        // alihkan halaman ke halaman homestay
        return redirect('/tabel1');
    }
    public function search(Request $request){
        $search = homestay::when($request->q, function ($query) use ($request) {
                  $query->where('homestay_nama', 'LIKE', "%{$request->q}%")
                        ->orWhere('homestay_alamat', 'LIKE', "%{$request->q}%")
                        ->orWhere('homestay_kota', 'LIKE', "%{$request->q}%");
                  })->paginate(8);
        $search->appends($request->only('q'));
        if(!$search->isEmpty()) {
            return view('hasilCari', compact($search));
         }  else {
            abort(404);
         }
         return view('hasilCari', ['search' => $search, 'q' => $request->q]);
    }
    
}
