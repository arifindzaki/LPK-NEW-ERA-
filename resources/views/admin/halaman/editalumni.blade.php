@extends('admin.index')

@section('container')
<h3 class="m-4">Edit Data Alumni</h3>
<hr>
<form class="m-4" action="{{ route('alumni.update',$EditAlumni->id) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nama Alumni</label>
                <input name="txtjudul" class="form-control py-4" value="{{ $EditAlumni->nama }}"  type="text" placeholder="Enter your text" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">Status</label>
        <input name="txtstatus" class="form-control py-4" value="{{ $EditAlumni->status }}" type="text"> </input>
    </div>
    <div class="form-group">
        <label class="small mb-1">Kesan</label>
        <input name="txtkesan" class="form-control py-4" value="{{ $EditAlumni->kesan }}" type="text"> </inp>
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