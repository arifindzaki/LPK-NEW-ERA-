@extends('admin.index')

@section('container')
<h3 class="m-4">Edit Data Pelatihan</h3>
<hr>
<form class="m-4" action="{{ route('pelatihan.update',$EditPelatihan->id) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Judul Pelatihan</label>
                <input name="txtjudul" class="form-control py-4" value="{{ $EditPelatihan->judul }}"  type="text"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">Status</label>
        <input name="txtdesk" value="{{ $EditPelatihan->deskripsi }}" class="form-control py-4" value="{{ $EditPelatihan->status }}" type="text"> </input>
    </div>
    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="image" class="form-control py-4" value="" type="file" />
    </div>
    <div class="form-group mt-4 mb-0">
    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    
</form>
<script>
</script>
@endsection