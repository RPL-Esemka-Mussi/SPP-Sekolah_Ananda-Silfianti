@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-black text-white">
        <h3>Kelola Kelas</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Tambah kelas</h4>
            </div>
            <a href="{{ url('kelas') }}" class="btn btn-warning">Kembali</a>
        </div>
        <hr>
        <form action="{{ url('/kelas/simpan') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="Kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control"  required>
            </div>
    
            <div class="form-group">
                <label for="kompetensi_keahlian">Kompetensi keahlian</label>
                <input type="kompetensi_keahlian" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control" required>
            </div>
    
    
    
            <div class="mt-3 text-end">
                <button type="reset" class="btn btn-secondary">reset</button>
                <button type="submit" class="btn btn-success">simpan</button>
            </div>
        </form>
    </div>
@endsection('content')