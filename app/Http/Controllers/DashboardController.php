<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;

class DashboardController extends Controller
{
    public function home() {
        return view('dashboard.home');
    }

    public function tampil() {
        $data = Destinasi::all();
        return view('dashboard.tampil', compact('data'));
    }

    public function tambah() {
        return view('dashboard.tambah');
    }

    public function store(Request $request) {
        $data = $request->all();

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $namaFile);
            $data['gambar'] = $namaFile;
        }

        Destinasi::create($data);

        return redirect()->route('dashboard.tampil')->with('success', 'Data berhasil ditambahkan');
    }

    public function detail($id)
    {
        $data = Destinasi::findOrFail($id);
        return view('detail', compact('data'));
    }

    public function edit($id)
{
    $data = Destinasi::findOrFail($id);
    return view('dashboard.edit', compact('data'));
}

    public function hapus($id)
    {
        $data = Destinasi::findOrFail($id);

        // Hapus gambar jika ada
        if ($data->gambar && file_exists(public_path('uploads/' . $data->gambar))) {
            unlink(public_path('uploads/' . $data->gambar));
        }

        $data->delete();

        return redirect()->route('dashboard.tampil')->with('success', 'Data berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        $data = Destinasi::findOrFail($id);

        $data->nama = $request->nama;
        $data->kategori = $request->kategori;
        $data->alamat = $request->alamat;
        $data->sejarah = $request->sejarah;
        $data->jam_buka = $request->jam_buka;
        $data->fasilitas = $request->fasilitas;
        $data->kontak = $request->kontak;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('uploads'), $namaGambar);
            $data->gambar = $namaGambar;
        }

        $data->save();

        return redirect()->route('dashboard.tampil')->with('success', 'Data berhasil diperbarui!');
    }

}
