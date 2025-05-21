@extends('admin.index')

@section('container')
<h3 class="m-4">Tambah Data Pelatihan</h3>
<hr>
<form class="m-4" action="{{ route('pelatihan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Judul Pelatihan</label>
                <input name="txtjudul" class="form-control py-4"  type="text" placeholder="Enter your Judul" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">Deskripsi Pelatihan</label>
        <input name="txtdesk" class="form-control py-4" type="text"> </input>
    </div>
    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="image" class="form-control py-4" type="file" />
    </div>
    <div class="form-group mt-4 mb-0">
    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
</form>
@endsection