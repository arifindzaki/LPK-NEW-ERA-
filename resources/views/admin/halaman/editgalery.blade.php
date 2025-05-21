@extends('admin.index')

@section('container')
<h3 class="m-4">Edit Data Galery</h3>
<hr>
<form class="m-4" action="{{ route('galery.update',$EditGalery->id) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Judul</label>
                <input name="txtjudul" class="form-control py-4" value="{{ $EditGalery->judul }}"  type="text"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">Deskripsi</label>
        <input name="txtdesk" value="{{ $EditGalery->deskripsi }}" class="form-control py-4" type="text"> </input>
    </div>
    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="image" value="" class="form-control py-4" value="" type="file" />
    </div>
    <div class="form-group mt-4 mb-0">
    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    
</form>
<script>
</script>
@endsection