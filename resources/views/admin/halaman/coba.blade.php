@extends('admin.index')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="../../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="../../admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mt-0 text-gray-800">ALUMNI</h1>
                    <p class="mb-4">Pada halaman ini anda dapat mengelolah data Alumni pada tabel dibawah, melakukan penambahan, edit dan hapus dan menampilkan pada halaman utama data Alumni.
                        <div class="mb-4"  >
                            <a href="{{ route('alumni.tambah') }}" type="button" class="btn btn-primary" >Tambahkan</a>
                        </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" >Tabel Data Alumni</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Foto</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Foto</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($dataAlumni as $model)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $model -> nama}}</td>
                                            <td>{{ $model -> status }}</td>
                                            <td><img src="{{ url('') }}/img/gambar/{{ $model -> image }}"  alt="" width="100px"></img>
                                            <td>{{ $model -> kesan }}</td>
                                            <td>
                                                <a href="{{ route('alumni.edit',$model->id) }}" type="button" class="btn btn-warning" >Edit</a>
                                                -
                                                <a href="{{ route('alumni.hapus',$model->id) }}"  type="button" class="btn btn-danger btn-hps" >Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        $(document).on('click','.btn-hps',function(e) {
)
        e.preventDefault();
        const.href1(this).attr('href');
    Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
        document.location.href=href1;
        Swal.fire("Saved!", "", "success");
        } else if (result.isDenied) {
        Swal.fire("Changes are not saved", "", "info");
        }
    })
    })
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="../../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../admin/js/demo/datatables-demo.js"></script>

</body>

</html>
@endsection