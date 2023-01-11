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
                            <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="{{ url('tambah-berita') }}" aria-haspopup="true" aria-expanded="false">
                                    Tambah
                                </a>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>oleh</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($berita as $item)
                                        <tr>
                                            <td> {{ $item->tgl }} </td>
                                            <td> {{ $item->judul }} </td>
                                            <td>{{ $item->kategori_id }}</td>
                                            <td>{{ $item->user_id }}</td>

                                            <td> <a href="{{ url('ubah-berita/'.$item->id) }}">Ubah</a> | <a href="{{ url('hapus-berita/'.$item->id) }}">Hapus</a> </td>
                                        </tr>
                                    @endforeach


                                </table>

                            </div>

                                {{ $berita->links() }}


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
