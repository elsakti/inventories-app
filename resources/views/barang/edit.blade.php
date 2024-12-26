@extends('layout.main')

@section('content')
<section class="forms-container">
    <div class="form-section">
      <h2>Perbarui Barang {{ $barang->nama }}</h2>
      <form class="input-form" action="{{ route('barang.perbarui', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="itemName">Nama Barang</label>
          <input type="text" id="itemName" name="nama" value="{{ $barang->nama }}" required />
        </div>
        <div class="form-group">
          <label for="category">Kategori</label>
          <select id="category" name="kategori_id" required>
            <option value="{{ $barang->kategori->id }}">{{ $barang->kategori->nama }}</option>
            @foreach ($semua_kategori as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="quantity">Jumlah</label>
          <input
            type="number"
            id="quantity"
            name="jumlah"
            min="0"
            value="{{ $barang->jumlah }}"
            required
          />
        </div>
        <div class="form-group">
          <label for="dateAdded">Tanggal Ditambahkan</label>
          <input type="date" id="dateAdded" name="tanggal_masuk" value="{{ $barang->tanggal_masuk }}" required />
        </div>
        <button type="submit" class="btn-submit">Perbarui Barang</button>
      </form>
    </div>
  </section>
@endsection