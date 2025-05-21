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
                    <h1 class="h3 mt-0 text-gray-800">Halaman Beranda</h1>
                    <p class="mb-4">Halaman ini berisi protokol apa saja dalam mengelolah data LPK ILMIAH
                    
                        <ul>
                            <li>Halaman Menu berada di sebelah samping kiri yang bisa di klik dan menuju ke halaman yang dituju</li>
                            <li>Untuk menambahkan data,terdapat tampilan button "tambah". admin bisa menekan button  <a href="#" type="button" class="btn btn-primary" >Tambahkan</a></li>
                            <li>Untuk mengubah sebuah data, admin bisa menekan button  <a href="#" type="button" class="btn btn-warning" >Edit</a> dan menuju halaman edit halaman</li>
                            <li>Untuk menghapus sebuah data yang terdapat pada tabel tekan tombol <a href="#" type="button" class="btn btn-danger" >Hapus</a> </li>
                            <li>Data yang tampil pada bagian tabel admin, secara otomatis akan ditampilkan pada publik website lpk ilmiah </li>
                        </ul>
                    <!-- DataTales Example -->
                    

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