@extends('layout.main')

@section('content')
<section class="content">
    <h2>Daftar Barang</h2>
    <a href="{{ route('form.barang.tambah') }}" class="btn-primary">Tambah Baru</a>
    <table style="margin-top: 30px">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Tanggal Ditambahkan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($semua_barang as $barang)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $barang->nama }}</td>
              <td>{{ $barang->kategori->nama }}</td>
              <td>{{ $barang->jumlah }}</td>
              <td>{{ $barang->tanggal_masuk }}</td>
              <td>
                <form action="{{ route('barang.hapus', $barang->id) }}" method="POST">
                  <a href="{{ route('form.barang.perbarui', $barang->id) }}" style="text-decoration: none;" class="btn-edit">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-delete" onclick="return confirm('Yakin Mau Hapus?')" style="padding-top: 4%;">Hapus</button>
                </form>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </section>
@endsection