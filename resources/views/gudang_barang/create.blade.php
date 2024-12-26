@extends('layout.main')
@section('content')
<section class="forms-container">
    <div class="form-section">
      <h2>Tambah Barang Ke Gudang {{ $gudang->nama }}</h2>
      <form class="input-form" action="{{ route('tambah.barang.gudang') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="barang">Pilih Barang</label>
          <select id="barang" name="barang_id" required>
            <option value="">Pilih Barang</option>
            @foreach ($semua_barang as $barang)
            <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
            @endforeach
          </select>
          <input type="hidden" name="gudang_id" value="{{ $gudang->id }}">
        </div>
        <button type="submit" class="btn-submit">Tambahkan Barang</button>
      </form>
    </div>
  </section>
@endsection