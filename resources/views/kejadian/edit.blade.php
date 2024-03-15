@extends('adminlte::page')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h3 class="card-title">Edit Kejadian</h3>
                   </div>
                   <div class="card-body">
                       <form action="{{ route('kejadian.update',$kejadian->id) }}" method="POST">
                           @csrf
                           @method('PUT')

                           <div class="form-group">
                       <strong>Jenis Bencana:</strong>
                       <select name="jenis_bencana" id="jenis_bencana" class="form-control">
                           <option value="">-- Pilih Jenis Bencana --</option>
                           <option value="Alam" @if($kejadian->jenis_bencana == 'Alam') selected @endif>Alam</option>
                           <option value="Sosial" @if($kejadian->jenis_bencana == 'Sosial') selected @endif>Sosial</option>
                        </select>
                   </div>
                   <div class="form-group">
                       <strong>Nama Bencana:</strong>
                       <input type="text" name="nama_bencana" id="nama_bencana" class="form-control" placeholder="Nama Bencana" value="{{ $kejadian->nama_bencana }}">
                   </div>
                   <div class="form-group">
                       <strong>Kode Bencana:</strong>
                       <input type="text" name="kode_bencana" id="kode_bencana" class="form-control" placeholder="Kode Bencana" value="{{ $kejadian->kode_bencana }}">
                   </div>
                   <div class="form-group">
                       <strong>Tanggal Kejadian:</strong>
                       <input type="date" name="tanggal_kejadian" id="tanggal_kejadian" class="form-control" placeholder="Tanggal Kejadian" value="{{ $kejadian->tanggal_kejadian }}">
                   </div>
                   <div class="form-group">
                       <strong>Waktu Kejadian:</strong>
                       <input type="time" name="waktu_kejadian" id="waktu_kejadian" class="form-control" placeholder="Waktu Kejadian" value="{{ $kejadian->waktu_kejadian }}">
                   </div>
                   <div class="form-group">
                       <label for="number" class="form-label">Jml KK/JJIWA</label>
                       <input type="number" class="form-control" name="jumlah_kk" id="jumlah_kk" placeholder="Masukkan jumlah korban jiwa" value="{{ $kejadian->jumlah_kk }}">
                   </div>
                   <div class="form-group">
                       <label for="nama" class="form-label">Nama Korban</label>
                       <input type="text" class="form-control" name="nama_korban" id="nama_korban" placeholder="Masukkan jenis bencana" value="{{ $kejadian->nama_korban }}">
                   </div>
                   <div class="form-group">
                       <label for="alamat" class="form-label">Kabupaten</label>
                       <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Masukkan Kabupaten" value="{{ $kejadian->kabupaten }}">
                   </div>
                   <div class="form-group">
                       <label for="alamat" class="form-label">Kapanewon</label>
                       <input type="text" class="form-control" name="kapanewon" id="kapanewon" placeholder="Masukkan kapanewon" value="{{ $kejadian->kapanewon }}">
                   </div>
                   <div class="form-group">
                       <label for="alamat" class="form-label">Kalurahan</label>
                       <input type="text" class="form-control" name="kalurahan" id="kalurahan" placeholder="Masukkan kalurahan" value="{{ $kejadian->kalurahan }}">
                   </div>
                   <div class="form-group">
                       <label for="alamat" class="form-label">Padukuhan</label>
                       <input type="text" class="form-control" name="padukuhan" id="padukuhan" placeholder="Masukkan padukuhan" value="{{ $kejadian->padukuhan }}">
                   </div>
                   <div class="form-group">
                       <label for="rt" class="form-label">RT:</label>
                       <input type="text" class="form-control" name="rt" id="rt" placeholder="Masukkan RT wilayah" value="{{ $kejadian->rt }}">
                   </div>
                   <div class="form-group">
                       <label for="rw" class="form-label">RW:</label>
                       <input type="text" class="form-control" name="rw" id="rw" placeholder="Masukkan RW wilayah" value="{{ $kejadian->rw }}">
                   </div>
                   <div class="form-group">
                       <label for="kerentanan" class="form-label">Kerentanan</label>
                       <div class="row g-3">
                           <div class="col-md-2">
                               <label for="kerentanan" class="form-label">Balita</label>
                               <input type="number" class="form-control" name="balita" id="balita" placeholder="Masukkan jumlah balita yang terkena kerentanan" value="{{ $kejadian->balita }}">
                           </div>
                           <div class="col-md-2">
                               <label for="kerentanan" class="form-label">Anak</label>
                               <input type="number" class="form-control" name="anak" id="anak" placeholder="Masukkan jumlah anak yang terkena kerentanan" value="{{ $kejadian->anak }}">
                           </div>
                           <div class="col-md-2">
                               <label for="kerentanan" class="form-label">Dewasa</label>
                               <input type="number" class="form-control" name="dewasa" id="dewasa" placeholder="Masukkan jumlah dewasa yang terkena kerentanan" value="{{ $kejadian->dewasa }}">
                           </div>
                           <div class="col-md-2">
                               <label for="kerentanan" class="form-label">Bumil</label>
                               <input type="number" class="form-control" name="bumil" id="bumil" placeholder="Masukkan jumlah bumil yang terkena kerentanan" value="{{ $kejadian->bumil }}">
                           </div>
                           <div class="col-md-2">
                               <label for="kerentanan" class="form-label">Lansia</label>
                               <input type="number" class="form-control" name="lansia" id="lansia" placeholder="Masukkan jumlah lansia yang terkena kerentanan" value="{{ $kejadian->lansia }}">
                           </div>
                           <div class="col-md-2">
                               <label for="kerentanan" class="form-label">Disabilitas</label>
                               <input type="number" class="form-control" name="disabilitas" id="disabilitas" placeholder="Masukkan jumlah disabilitas yang terkena kerentanan" value="{{ $kejadian->disabilitas }}">
                           </div>
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="kerugian" class="form-label">Kerugian</label>
                       <textarea class="form-control" name="kerugian" id="kerugian" rows="3" placeholder="Masukkan kerugian">{{ $kejadian->kerugian }}</textarea>
                   </div>
                   <div class="form-group">
                       <label for="keterangan" class="form-label">Keterangan</label>
                       <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan">{{ $kejadian->keterangan }}</textarea>
                   </div>
                   <div class="form-group">
                       <label for="dampak" class="form-label">Dampak Bencana</label>
                       <div class="row g-3">
                           <div class="col-md-2">
                               <label for="dampak" class="form-label">Meninggal</label>
                               <input type="number" class="form-control" name="meninggal" id="meninggal" placeholder="Masukkan jumlah orang yang meninggal" value="{{ $kejadian->meninggal }}">
                           </div>
                           <div class="col-md-2">
                               <label for="dampak" class="form-label">Hilang</label>
                               <input type="number" class="form-control" name="hilang" id="hilang" placeholder="Masukkan jumlah orang yang hilang" value="{{ $kejadian->hilang }}">
                           </div>
                           <div class="col-md-2">
                               <label for="dampak" class="form-label">Luka Ringan</label>
                               <input type="number" class="form-control" name="luka_ringan" id="luka_ringan" placeholder="Masukkan jumlah orang yang luka ringan" value="{{ $kejadian->luka_ringan }}">
                           </div>
                           <div class="col-md-2">
                               <label for="dampak" class="form-label">Luka Sedang</label>
                               <input type="number" class="form-control" name="luka_sedang" id="luka_sedang" placeholder="Masukkan jumlah orang yang luka sedang" value="{{ $kejadian->luka_sedang }}">
                           </div>
                           <div class="col-md-2">
                               <label for="dampak" class="form-label">Luka berat</label>
                               <input type="number" class="form-control" name="luka_berat" id="luka_berat" placeholder="Masukkan jumlah orang yang luka berat" value="{{ $kejadian->luka_berat }}">
                           </div>
                           <div class="col-md-2">
                               <label for="dampak" class="form-label">Mengungsi</label>
                               <input type="number" class="form-control" name="mengungsi" id="mengungsi" placeholder="Masukkan jumlah orang yang mengungsi" value="{{ $kejadian->mengungsi }}">
                           </div>
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="rusak" class="form-label">Dampak Kerusakan</label>
                       <div class="row g-3">
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Rumah</label>
                               <input type="number" class="form-control" name="rumah" id="rumah" placeholder="Masukkan jumlah  rumah rusak" value="{{ $kejadian->rumah }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Dapur</label>
                               <input type="number" class="form-control" name="dapur" id="dapur" placeholder="Masukkan jumlah  dapur rusak" value="{{ $kejadian->dapur }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Pendidikan</label>
                               <input type="number" class="form-control" name="pendidikan" id="pendidikan" placeholder="Masukkan jumlah  pendidikan yang rusak" value="{{ $kejadian->pendidikan }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Peribadatan</label>
                               <input type="number" class="form-control" name="peribadatan" id="peribadatan" placeholder="Masukkan jumlah  peribadatan yang rusak" value="{{ $kejadian->peribadatan }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Fasum</label>
                               <input type="number" class="form-control" name="fasum" id="fasum" placeholder="Masukkan jumlah fasum" value="{{ $kejadian->fasum }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Perkantoran</label>
                               <input type="number" class="form-control" name="perkantoran" id="perkantoran" placeholder="Masukkan jumlah  perkantoran yang rusak" value="{{ $kejadian->perkantoran }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Jembatan</label>
                               <input type="number" class="form-control" name="jembatan" id="jembatan" placeholder="Masukkan jumlah  jembatan yang rusak" value="{{ $kejadian->jembatan }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Pabrik</label>
                               <input type="number" class="form-control" name="pabrik" id="pabrik" placeholder="Masukkan jumlah pabrik yang rusak" value="{{ $kejadian->pabrik }}">
                           </div>
                           <div class="col-md-2">
                               <label for="rusak" class="form-label">Kios</label>
                               <input type="number" class="form-control" name="kios" id="kios" placeholder="Masukkan jumlah kios yang rusak" value="{{ $kejadian->kios }}">
                           </div>
                       </div>
                   </div>
                           <div class="form-group">
                               <strong>Sumber:</strong>
                               <input type="text" name="sumber" class="form-control" placeholder="Sumber" id="sumber" value="{{ $kejadian->sumber }}">
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
