@include('layouts.form')

<div class="container">
    <div class="form-card">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Tambah Data Barang</h1>
                <div class="mb-3 d-flex justify-content-center">
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">id</label>
                        <input type="number" name="id_barang" id="id_barang" placeholder="ID" autofocus
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">nama</label>
                        <input type="text" name="nama_barang" id="nama_barang" placeholder="nama barang"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">harga</label>
                        <input type="number" name="harga" id="harga" placeholder="harga" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">stok</label>
                        <input type="number" name="stok" id="stok" placeholder="stok" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input type="file" name="foto" id="foto" placeholder="foto" class="form-control"
                            required>
                    </div>

                    <button class="btn btn-success mt-3" type="submit">simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
