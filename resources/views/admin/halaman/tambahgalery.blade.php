@extends('admin.index')

@section('container')
<h3 class="m-4">Tambah Data Galery</h3>
<hr>
<form class="m-4" action="{{ route('galery.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Judul</label>
                <input name="txtjudul" class="form-control py-4"  type="text" placeholder="Enter your Judul" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">Deskripsi</label>
        <input name="txtdesk" class="form-control py-4" type="text"> </input>
    </div>
    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="image" class="form-control py-4" type="file" />
    </div>
    <div  class="form-group mt-4 mb-0">
    <button type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">Simpan</button>
    </div>
    
</form>
@endsection