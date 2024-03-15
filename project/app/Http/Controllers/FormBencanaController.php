<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormBencanaController extends Controller
{
    private $data = [];

    public function index()
    {
        return view('form-bencana');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'jenis_bencana' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'number' => 'required|integer|min:0',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'rt' => 'required|integer|min:0',
            'rw' => 'required|integer|min:0',
            'kerentanan.balita' => 'required|integer|min:0',
            'kerentanan.anak' => 'required|integer|min:0',
            'kerentanan.dewasa' => 'required|integer|min:0',
            'kerentanan.bumil' => 'required|integer|min:0',
            'kerentanan.lansia' => 'required|integer|min:0',
            'kerentanan.disabilitas' => 'required|integer|min:0',
            'kerugian' => 'required|string|max:255',
            'keterangan' => 'required|string|max:255',
            'dampak.meninggal' => 'required|integer|min:0',
            'dampak.hilang' => 'required|integer|min:0',
            'dampak.luka_ringan' => 'required|integer|min:0',
            'dampak.luka_sedang' => 'required|integer|min:0',
            'dampak.luka_berat' => 'required|integer|min:0',
            'dampak.mengungsi' => 'required|integer|min:0',
            'rusak.rumah' => 'required|integer|min:0',
            'rusak.dapur' => 'required|integer|min:0',
            'rusak.pendidikan' => 'required|integer|min:0',
            'rusak.peribadatan' => 'required|integer|min:0',
            'rusak.fasum' => 'required|integer|min:0',
            'rusak.perkantoran' => 'required|integer|min:0',
            'rusak.jembatan' => 'required|integer|min:0',
            'rusak.pabrik' => 'required|integer|min:0',
            'rusak.kios' => 'required|integer|min:0',
            'sumber' => 'required|string|max:255',
        ]);

        $this->data[] = $validatedData;

        return redirect()->route('form-bencana')->with('success', 'Data submitted successfully!');
    }

    public function export()
    {
        $spreadsheet = new \Spreadsheet_Excel_Writer();
        $worksheet = $spreadsheet->addWorksheet('Bencana Data');

        $row = 0;
        $col = 0;

        $header = [
            'Kategori',
            'Jenis',
            'Kode',
            'Tanggal',
            'Jam',
            'Jumlah Korban',
            'Nama Korban',
            'Alamat',
            'RT',
            'RW',
            'Kerentanan Balita',
            'Kerentanan Anak',
            'Kerentanan Dewasa',
            'Kerentanan Bumil',
            'Kerentanan Lansia',
            'Kerentanan Disabilitas',
            'Kerugian',
            'Keterangan',
            'Dampak Meninggal',
            'Dampak Hilang',
            'Dampak Luka Ringan',
            'Dampak Luka Sedang',
            'Dampak Luka Berat',
            'Dampak Mengungsi',
            'Rusak Rumah',
            'Rusak Dapur',
            'Rusak Pendidikan',
            'Rusak Peribadatan',
            'Rusak Fasum',
            'Rusak Perkantoran',
            'Rusak Jembatan',
            'Rusak Pabrik',
            'Rusak Kios',
            'Sumber',
        ];

        foreach ($header as $value) {
            $worksheet->write($row, $col++, $value);
        }

        $row++;
        $col = 0;

        foreach ($this->data as $item) {
            $worksheet->write($row, $col++, $item['kategori']);
            $worksheet->write($row, $col++, $item['jenis']);
            $worksheet->write($row, $col++, $item['jenis_bencana']);
            $worksheet->write($row, $col++, $item['tanggal']);
            $worksheet->write($row, $col++, $item['jam']);
            $worksheet->write($row, $col++, $item['number']);
            $worksheet->write($row, $col++, $item['nama']);
            $worksheet->write($row, $col++, $item['alamat']);
            $worksheet->write($row, $col++, $item['rt']);
            $worksheet->write($row, $col++, $item['rw']);
            $worksheet->write($row, $col++, $item['kerentanan']['balita']);
            $worksheet->write($row, $col++, $item['kerentanan']['anak']);
            $worksheet->write($row, $col++, $item['kerentanan']['dewasa']);
            $worksheet->write($row, $col++, $item['kerentanan']['bumil']);
            $worksheet->write($row, $col++, $item['kerentanan']['lansia']);
            $worksheet->write($row, $col++, $item['kerentanan']['disabilitas']);
            $worksheet->write($row, $col++, $item['kerugian']);
            $worksheet->write($row, $col++, $item['keterangan']);
            $worksheet->write($row, $col++, $item['dampak']['meninggal']);
            $worksheet->write($row, $col++, $item['dampak']['hilang']);
            $worksheet->write($row, $col++, $item['dampak']['luka_ringan']);
            $worksheet->write($row, $col++, $item['dampak']['luka_sedang']);
            $worksheet->write($row, $col++, $item['dampak']['luka_berat']);
            $worksheet->write($row, $col++, $item['dampak']['mengungsi']);
            $worksheet->write($row, $col++, $item['rusak']['rumah']);
            $worksheet->write($row, $col++, $item['rusak']['dapur']);
            $worksheet->write($row, $col++, $item['rusak']['pendidikan']);
            $worksheet->write($row, $col++, $item['rusak']['peribadatan']);
            $worksheet->write($row, $col++, $item['rusak']['fasum']);
            $worksheet->write($row, $col++, $item['rusak']['perkantoran']);
            $worksheet->write($row, $col++, $item['rusak']['jembatan']);
            $worksheet->write($row, $col++, $item['rusak']['pabrik']);
            $worksheet->write($row, $col++, $item['rusak']['kios']);
            $worksheet->write($row, $col++, $item['sumber']);

            $row++;
            $col = 0;
        }

        $writer = \IOFactory::createWriter($spreadsheet, 'Xls');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="bencana_data.xls"');
        $writer->save('php://output');
    }
}