@extends('admin.index')

@section('container')
<h3 class="m-4">Tambah Data Contact</h3>
<hr>
<form class="m-4" action="{{ route('contact.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nomor Handphone</label>
                <input name="txtphone" class="form-control py-4"  type="number" placeholder="Enter your number" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="small mb-1">Email</label>
        <input name="txtemail" class="form-control py-4" type="text" placeholder="isi nama email..."> </input>
    </div>
    <div  class="form-group mt-4 mb-0">
    <button type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">Simpan</button>
    </div>
    
</form>
@endsection