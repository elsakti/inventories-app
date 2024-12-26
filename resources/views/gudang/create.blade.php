@extends('layout.main')

@section('content')
<section class="forms-container">
  <div class="form-section">
    <h2>Tambah Gudang Baru</h2>
    <form class="input-form" action="{{ route('gudang.tambah') }}" method="POST">
        @csrf
      <div class="form-group">
        <label for="warehouseName">Nama Gudang</label>
        <input
          type="text"
          id="warehouseName"
          name="nama"
          required
        />
      </div>
      <button type="submit" class="btn-submit">Tambahkan Gudang</button>
    </form>
  </div>
</section>

@endsection