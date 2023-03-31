@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-black text-white">
        <h3>Transaksi SPP</h3>
    </div>
    <div class="container mt-4">
        <hr>
      <div class="d-flex justify-content-center text-center">
      <div class="card text-bg-success ms-5 me-5 w-100">
      <div class="card-header">
           <b>Total Dibayar</b>
        </div>
           <div class="card-body">
           <h3>Rp. {{ $total ['total_dibayar'] }}</h3>
           </div>
        </div>
        <div class="card text-bg-danger ms-5 me-5 w-100">
        <div class="card-header">
            <b>Total Belum Dibayar</b>
        </div>
           <div class="card-body">
          <h3>Rp. {{ $total ['total_belumdibayar'] }}</h3>
           </div>
        </div>
      </div>
      <hr>
      @if (Session::has('sukses'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong>{{ Session::get('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @elseif(Session::has('gagal'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>{{ Session::get('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
       @endif
      <div class="d-flex justify-content-between mb-3">
            <div>
                <h4>History Transaksi</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="me-2"><b>NIS : {{ $siswa->nis}} </b></div>
                <div class="me-2"><b>Nama : {{ $siswa->user->name}} </b></div>
                <div><b>Kelas : {{ $siswa->kelas->kelas}} </b></div>
            </div>
            <div>
            <a href="{{ url('pembayaran') }}" class="btn btn-warning">Kembali</a>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
            </button>
        </div>
</div>
      <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Petugas</th>
                <th>Tanggal</th>
                <th>SPP</th>
                <th>Jumlah Bayar</th>
                <th>Kelola</th>
              </tr>
              </thead>
              <tbody>
      @if ($pembayaran->count() == 0)
        <tr class="text-center">
            <td colspan="6"><strong>Belum ada transaksi.</strong></td>
        </tr>
        @else
        @foreach($pembayaran as $data)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $data->user->name }}</td>
          <td>{{ $data->tanggal_bayar }}</td>
          <td>{{ $data->spp->tahun }}</td>
          <td>{{ 'Rp.' . $data->nominal }}</td>
          <td>
            <a href="{{ url("spp/hapus/$data->id") }}" class="btn btn-sm btn-danger">Hapus</a>
            <a href="{{ url("spp/edit/$data->id") }}" class="btn btn-sm btn-primary">Edit</a>
          </td>
        </tr>
        @endforeach
        @endif
              </tbody>
              </table>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Transaksi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="{{ url('pembayaran/simpan') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
        <input type="hidden" name="siswa_id" value="{{ $siswa->id}}">
        <div class="form-group">
            <label for="siswa">Petugas</label>
            <input type="text" name="petugas" id="petugas" readonly value="{{ auth()->user()->name}}" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="siswa">Siswa</label>
            <input type="text" name="siswa" id="siswa" readonly value="{{ $siswa->user->name}}" class="form-control">
        </div>
        <div class="form-group mt-2">
                <label for="spp_id">Spp</label>
             <select name="spp_id" id="spp_id" class="form-select" required>
                <option value="" selected disabled>-Pilih SPP-</option>
               @foreach ($spp as $data)
              
                      <option value="{{ $data->id }}" >{{ $data->tahun . ' - Rp.' . $data->nominal}}</option>
               @endforeach
             </select>
            </div>
        <div class="form-group mt-2">
            <label for="tanggal_bayar">Tanggal</label>
            <input type="date" name="tanggal_bayar" id="tanggal_bayar" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="jumlah_bayar">Jumlah Bayar</label>
            <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="form-control">
        </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection('content')