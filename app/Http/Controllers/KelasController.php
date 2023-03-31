<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = kelas::all();

        return view('kelas.index', compact('kelas'));
    }
    public function tambah ()
    {
        return view('kelas.tambah');
    }
    public function simpan(Request $request)
    {
        try {
            
                Kelas::create([
                    'kelas' => $request->kelas,
                    'kompetensi_keahlian' => $request->kompetensi_keahlian,
                    
                ]);

            return redirect('kelas')->with('sukses', 'Data berhasil ditambahka✨');
        } catch (\Exception $e) {
            return redirect('kelas')->with('gagal', 'Data gagal ditambahkan❌');
        }
    }
    public function edit($id)
    {
        try {
        
          $kelas =  Kelas::findOrFail($id);

            return view('kelas.edit',  compact('kelas'));
        } catch (\Exception $e) {
            return redirect('kelas')->with('gagal', 'Data gagal ditambahkan❌');
        }
    }
    public function update(Request $request)
    {
        // dd($request->all());

        try {

          Kelas::where('id', $request->id)->update([
            'kelas' => $request->kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian
          ]);

          return redirect('kelas')->with('sukses', 'Data berhasil dihapus✨');
        }catch (\Exception $e) {
            return redirect('kelas')->with('gagal', 'Data gagal dihapus❌');
    }
}
    public function hapus($id)
    {
        try {
            Kelas::findOrFail($id);
            Kelas::destroy($id);
            
            return redirect('kelas')->with('sukses', 'Data berhasil dihapus✨');
        }catch (\Exception $e) {
            return redirect('kelas')->with('gagal', 'Data gagal dihapus❌');
        }
    }     
}
