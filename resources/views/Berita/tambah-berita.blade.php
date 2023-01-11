<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Berita</title>

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
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{ url('simpan-berita') }}" >
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="date" name="tgl" class="form-control form-control-user"
                                        placeholder="Tanggal">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="judul" class="form-control form-control-user"
                                        placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <select type="text" name="kategori_id" class="form-control form-control-user"
                                        placeholder="Kategori">
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    @foreach ($kate as $item)
                                        <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                                    @endforeach

                                </select>
                                </div>

                                <div class="form-group">
                                    <textarea  name="isi" class="form-control form-control-user"
                                        placeholder="Isi Berita" ></textarea>
                                </div>


                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Simpan
                                </button>
                            </form>
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
