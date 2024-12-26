@extends('layout.main')

@section('content')
<section class="content">
    <h2>Daftar Kategori Barang</h2>

    <a href="{{ route('form.kategori.tambah') }}" class="btn-primary">Tambah Baru</a>

    <table style="margin-top: 30px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($semua_kategori as $kategori)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kategori->nama }}</td>
          <td>
            <form action="{{ route('kategori.hapus', $kategori->id) }}" method="POST">
              <a href="{{ route('form.kategori.perbarui', $kategori->id) }}" style="text-decoration: none;" class="btn-edit">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-delete" onclick="return confirm('Yakin Mau Hapus?')" style="padding-top: 2%;">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

@endsection