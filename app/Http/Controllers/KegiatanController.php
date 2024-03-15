<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::orderBy('id', 'DESC')->paginate(5);
        return view('kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_kegiatan' => 'required',
            'kode' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_kegiatan' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'padukuhan' => 'required',
            'kalurahan' => 'required',
            'kapanewon' => 'required',
            'kabupaten' => 'required',
            'peserta_terlibat' => 'required',
            'uraian_kegiatan' => 'required',
            'personil_terlibat' => 'required',
        ], [
            'required' => 'Kolom :attribute harus diisi.',
        ]);

        $kegiatan = Kegiatan::create($validatedData);

        return redirect()->route('kegiatan.index')->with('message', 'Kegiatan baru berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        try {
            $kegiatan = Kegiatan::findOrFail($id);
            return view('kegiatan.show', compact('kegiatan'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            abort(404);
        }
    }

    public function edit(string $id)
    {
        try {
            $kegiatan = Kegiatan::findOrFail($id);
            return view('kegiatan.edit', compact('kegiatan'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            abort(404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'jenis_kegiatan' => 'required',
            'kode' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_kegiatan' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'padukuhan' => 'required',
            'kalurahan' => 'required',
            'kapanewon' => 'required',
            'kabupaten' => 'required',
            'peserta_terlibat' => 'required',
            'uraian_kegiatan' => 'required',
            'personil_terlibat' => 'required',
        ], [
            'required' => 'Kolom :attribute harus diisi.',
        ]);

        try {
            $kegiatan = Kegiatan::findOrFail($id);
            $kegiatan->update($validatedData);
            return redirect()->route('kegiatan.index')->with('message', 'Kegiatan berhasil diperbarui!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            abort(404);
        }
    }

    public function destroy(string $id)
    {
        try {
            $kegiatan = Kegiatan::findOrFail($id);
            $kegiatan->delete();
            return redirect()->route('kegiatan.index')->with('message', 'Kegiatan berhasil dihapus!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
