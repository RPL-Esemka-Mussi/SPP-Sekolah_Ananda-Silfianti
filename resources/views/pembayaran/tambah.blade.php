@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-black text-white">
        <h3>Kelola Pembayaran</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Tambah Pembayaran</h4>
            </div>
            <a href="{{ url('pembayaran') }}" class="btn btn-warning">Kembali</a>
        </div>
        <hr>
        <form action="{{ url('pembayaran/simpan') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control" required>
            </div>
    
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="number" name="nominal" id="nominal" class="form-control" required>
            </div>
    
    
    
            <div class="mt-3 text-end">
                <button type="reset" class="btn btn-secondary">reset</button>
                <button type="submit" class="btn btn-success">simpan</button>
            </div>
        </form>
    </div>
@endsection('content')