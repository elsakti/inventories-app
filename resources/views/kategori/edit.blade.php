@extends('layout.main')

@section('content')
<section class="forms-container">
  <div class="form-section">
    <h2>Perbarui Kategori {{ $kategori->nama }}</h2>
    <form class="input-form" action="{{ route('kategori.perbarui', $kategori->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="warehouseName">Nama Kategori</label>
        <input
          type="text"
          id="warehouseName"
          name="nama"
          value="{{ $kategori->nama }}"
          required
        />
      </div>
      <button type="submit" class="btn-submit">Tambahkan Kategori</button>
    </form>
  </div>
</section>
@endsection