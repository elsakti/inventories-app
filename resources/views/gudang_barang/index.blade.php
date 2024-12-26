@extends('layout.main')

@section('content')
<section class="content">
    <h2>Daftar Barang di Gudang {{ $gudang->nama }}</h2>
    <a href="{{ route('form.barang.gudang', $gudang->id) }}" class="btn-primary">Tambah Baru</a>
    <table style="margin-top: 30px">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Tanggal Ditambahkan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($gudang->barang as $barang)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $barang->nama }}</td>
              <td>{{ $barang->kategori->nama }}</td>
              <td>{{ $barang->jumlah }}</td>
              <td>{{ $barang->tanggal_masuk }}</td>
              <td>
                <form action="{{ route('hapus.barang.gudang', $gudang->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="barang_id" value="{{ $barang->id }}">
                    <button type="submit" class="btn-delete" onclick="return confirm('Yakin mau hapus barang dari gudang ini?')">Hapus dari Gudang</button>
                </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</section>
@endsection
