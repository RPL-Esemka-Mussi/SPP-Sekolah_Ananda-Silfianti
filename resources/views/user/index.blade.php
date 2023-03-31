@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-black text-white">
        <h3>Kelola User</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Data User</h4>
            </div>
            <a href="{{ url('user/tambah') }}" class="btn btn-success">Tambah</a>
        </div>
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
        <hr>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Kelola</th>
              </tr>
              </thead>
              <tbody>
              @if ($users->count() == 0)
        <tr class="text-center">
            <td colspan="4"><strong>Belum ada data.</strong></td>
        </tr>
      @endif
              @foreach($users as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                  <td><span class="badge bg-secondary">{{ucfirst($data->level)}}</span></td>
                    <td>
                        <a href="{{ url("user/hapus/$data->id") }}" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="{{ url("user/edit/$data->id") }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
              </table>
    </div>
@endsection('content')