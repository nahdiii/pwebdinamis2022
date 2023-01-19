<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Berita</title>

    @include('tools.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1> --}}
                    <div class="card shadow mb-4 mt-5">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ $berita->judul }}</h6>
                            <div class="dropdown no-arrow">


                            </div>
                        </div>
                        <div class="card-body">
                            <label for="label">Tanggal Terbit : {{ date('d/m/Y', strtotime($berita->tgl)) }}</label> <br>
                            <label for="label">Penulis : {{ $berita->user->name }}</label>
                            <p>{{ $berita->isi }}</p>



                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('tools.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    @include('tools.script')
</body>

</html>
