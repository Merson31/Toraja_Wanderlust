<!DOCTYPE html>
<html lang="en">

@include('admin.head')
<title>{{ $title }}</title>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1>Data Berita</h1>
                    <a href="{{ url('/admin/berita/tambah_berita') }}" class="btn btn-primary">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">
                                    <center>Judul</center>
                                </th>
                                <th scope="col">
                                    <center>Berita</center>
                                </th>
                                <th scope="col">
                                    <center>Gambar</center>
                                </th>
                                <th scope="col">
                                    <center>Aksi</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beritapost as $berita)
                                <tr>
                                    <th scope="row">{{ $berita->id }}</th>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ $berita->berita }}</td>
                                    <td>
                                        <center><img src="{{ asset('storage/image/'.$berita->gambar) }}" alt="gambar"
                                        width="300px"></center>
                                    </td>
                                    <td class="d-flex flex-column"><a
                                            href="{{ url('/admin/berita/'.$berita->id.'/edit_berita') }}"
                                            class="btn btn-success mb-3">Edit</a>
                                        <form action="{{ url('/admin/berita/'.$berita->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')

</body>

</html>
