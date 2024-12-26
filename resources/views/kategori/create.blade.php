@extends('layout.main')

@section('content')
<section class="forms-container">
  <div class="form-section">
    <h2>Tambah Kategori Baru</h2>
    <form class="input-form" action="{{ route('kategori.tambah') }}" method="POST">
        @csrf
      <div class="form-group">
        <label for="warehouseName">Nama Kategori</label>
        <input
          type="text"
          id="warehouseName"
          name="nama"
          required
        />
      </div>
      <button type="submit" class="btn-submit">Tambahkan Kategori</button>
    </form>
  </div>
</section>

@endsection