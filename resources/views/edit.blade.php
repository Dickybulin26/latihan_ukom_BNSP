@include('layouts.form')

<div class="container">
    <div class="form-card">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Edit Data Barang</h1>
                <div class="mb-3 d-flex justify-content-center">
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.update', $data->id_barang) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">id</label>
                        <input type="number" name="id_barang" id="id_barang" placeholder="ID" autofocus
                            class="form-control" value="{{ $data->id_barang }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">nama</label>
                        <input type="text" name="nama_barang" id="nama_barang" placeholder="nama barang"
                            class="form-control" value="{{ $data->nama_barang }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">harga</label>
                        <input type="number" name="harga" id="harga" placeholder="harga" class="form-control"
                            value="{{ $data->harga }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">stok</label>
                        <input type="number" name="stok" id="stok" placeholder="stok" class="form-control"
                            value="{{ $data->stok }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input type="file" name="foto" id="foto" placeholder="foto"
                            value="{{ $data->foto }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <img src="{{ asset('images/' . $data->foto) }}" alt="" style='width: 5rem'>
                    </div>

                    <button class="btn btn-success mt-3" type="submit">update</button>
                </form>
            </div>
        </div>
    </div>
</div>
