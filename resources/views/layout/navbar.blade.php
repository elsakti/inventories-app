<nav>
    <div class="logo">SMI</div>
    <ul class="nav-links">
      <li><a href="{{ url('/') }}" class="{{ $halaman == 'beranda' ? 'active' : '' }}">Beranda</a></li>
      <li><a href="{{ route('barang') }}" class="{{ $halaman == 'barang' ? 'active' : '' }}">Barang</a></li>
      <li><a href="{{ route('kategori') }}" class="{{ $halaman == 'kategori' ? 'active' : '' }}">Kategori</a></li>
      <li><a href="{{ route('gudang') }}" class="{{ $halaman == 'gudang' ? 'active' : '' }}">Gudang</a></li>
    </ul>
</nav>