@extends('admin.index')

@section('container')
<h3 class="m-4">Tambah Data Admin</h3>
<hr>
<form class="m-4" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Nama Admin</label>
                <input name="txtjudul" class="form-control py-4"  type="text" placeholder="Enter your name" />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Username</label>
                <input name="txtuser" class="form-control py-4"  type="text" placeholder="Enter your username" />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Email</label>
                <input name="txtemail" class="form-control py-4"  type="email" placeholder="Enter your email" />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1">Password</label>
                <input name="txtpass" class="form-control py-4"  type="text" />
            </div>
        </div>
    </div>
    <div class="form-group mt-4 mb-0">
    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
</form>
@endsection