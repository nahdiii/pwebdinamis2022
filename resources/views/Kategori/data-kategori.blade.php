<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Kategori</title>

    @include('tools.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('tools.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('tools.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1> --}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="{{ url('tambah-kategori') }}" aria-haspopup="true" aria-expanded="false">
                                    Tambah
                                </a>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nama Kategori</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($kate as $item)
                                        <tr>
                                            <td> {{ $item->namakategori }} </td>
                                            <td>{{ $item->total }}</td>

                                            <td> <a href="{{ url('ubah-pengguna/'.$item->id) }}">Ubah</a> | <a href="{{ url('hapus-kategori/'.$item->id) }}">Hapus</a> </td>
                                        </tr>
                                    @endforeach


                                </table>

                            </div>

                                {{ $kate->links() }}


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
