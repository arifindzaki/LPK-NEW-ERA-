@extends('admin.index')

@section('container')
<h3 class="m-4">Tambah Data Mahasiswa</h3>
<hr>
<form class="m-4" action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">nIM</label>
                <input name="txtnim" class="form-control py-4"  type="text" placeholder="Enter your Judul" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">nama</label>
        <input name="txtnama" class="form-control py-4" type="text"> </input>
    </div>
    <div class="form-group">
        <label class="small mb-1">Prodi</label>
        <input name="txtprodi" class="form-control py-4" type="text" />
    </div>
    <div class="form-group">
        <label class="small mb-1">Jurusan</label>
        <input name="txtjurusan" class="form-control py-4" type="text" />
    </div>
    <div class="form-group mt-4 mb-0">
    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
</form>
@endsection