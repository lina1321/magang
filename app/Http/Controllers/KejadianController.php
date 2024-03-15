<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kejadian;

class KejadianController extends Controller
{
    public function index(Request $request)
    {
        $kejadian = Kejadian::orderBy('id', 'DESC');

        if ($request->jenis_bencana) {
            $kejadian->where('jenis_bencana', $request->jenis_bencana);
        }

        $kejadian = $kejadian->paginate(10);

        return view('kejadian.index', compact('kejadian'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function filterByJenisBencana(Request $request)
    {
        $jenisBencana = $request->input('jenis_bencana');

        if ($jenisBencana == 'semua') {
            $kejadian = Kejadian::paginate(10);
        } else {
            $kejadian = Kejadian::where('jenis_bencana', $jenisBencana)->paginate(10);
        }

        return view('kejadian.index', compact('kejadian'));
    }

    public function create()
    {
        return view('kejadian.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_bencana' => 'required',
            'nama_bencana' => 'required',
            'kode_bencana' => 'required',
            'tanggal_kejadian' => 'required',
            'waktu_kejadian' => 'required',
            'jumlah_kk' => 'required',
            'nama_korban' => 'required',
            'kabupaten' => 'required',
            'kapanewon' => 'required',
            'kalurahan' => 'required',
            'padukuhan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'balita' => 'required',
            'anak' => 'required',
            'dewasa' => 'required',
            'bumil' => 'required',
            'lansia' => 'required',
            'disabilitas' => 'required',
            'kerugian' => 'required',
            'keterangan' => 'required',
            'meninggal' => 'required',
            'hilang' => 'required',
            'luka_ringan' => 'required',
            'luka_sedang' => 'required',
            'luka_berat' => 'required',
            'mengungsi' => 'required',
            'rumah' => 'required',
            'dapur' => 'required',
            'pendidikan' => 'required',
            'peribadatan' => 'required',
            'fasum' => 'required',
            'perkantoran' => 'required',
            'jembatan' => 'required',
            'pabrik' => 'required',
            'kios' => 'required',
            'sumber' => 'required',
        ]);

        $kejadian = Kejadian::create($validatedData);

        return redirect()->route('kejadian.index')->with('message', 'Kejadian baru berhasil ditambahkan!');
    }

    public function show($id)
    {
        $kejadian = Kejadian::findOrFail($id);
        return view('kejadian.show', compact('kejadian'));
    }

    public function edit($id)
    {
        $kejadian = Kejadian::findOrFail($id);
        return view('kejadian.edit', compact('kejadian'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jenis_bencana' => 'required',
            'nama_bencana' => 'required',
            'kode_bencana' => 'required',
            'tanggal_kejadian' => 'required',
            'waktu_kejadian' => 'required',
            'jumlah_kk' => 'required',
            'nama_korban' => 'required',
            'kabupaten' => 'required',
            'kapanewon' => 'required',
            'kalurahan' => 'required',
            'padukuhan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'balita' => 'required',
            'anak' => 'required',
            'dewasa' => 'required',
            'bumil' => 'required',
            'lansia' => 'required',
            'disabilitas' => 'required',
            'kerugian' => 'required',
            'keterangan' => 'required',
            'meninggal' => 'required',
            'hilang' => 'required',
            'luka_ringan' => 'required',
            'luka_sedang' => 'required',
            'luka_berat' => 'required',
            'mengungsi' => 'required',
            'rumah' => 'required',
            'dapur' => 'required',
            'pendidikan' => 'required',
            'peribadatan' => 'required',
            'fasum' => 'required',
            'perkantoran' => 'required',
            'jembatan' => 'required',
            'pabrik' => 'required',
            'kios' => 'required',
            'sumber' => 'required',
        ]);

        $kejadian = Kejadian::findOrFail($id);
        $kejadian->update($validatedData);

        return redirect()->route('kejadian.index')->with('message', 'Kejadian berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kejadian = Kejadian::findOrFail($id);
        $kejadian->delete();

        return redirect()->route('kejadian.index')->with('message', 'Kejadian berhasil dihapus!');
    }
}
