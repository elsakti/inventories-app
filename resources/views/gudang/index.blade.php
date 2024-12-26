@extends('layout.main')

@section('content')
<section class="content">
    <h2>Daftar Gudang</h2>

    <a href="{{ route('form.gudang.tambah') }}" class="btn-primary">Tambah Baru</a>

    <table style="margin-top: 30px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($semua_gudang as $gudang)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><a href="{{ route('gudang.barang', $gudang->id) }}" style="text-decoration: none; color: black;">
            {{ $gudang->nama }}
          </a></td>
          <td>
            <form action="{{ route('gudang.hapus', $gudang->id) }}" method="POST">
              <a href="{{ route('form.gudang.perbarui', $gudang->id) }}" style="text-decoration: none;" class="btn-edit">Edit</a>
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