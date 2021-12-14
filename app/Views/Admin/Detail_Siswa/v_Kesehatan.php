<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title><?= $title; ?></title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/css/feather.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="/css/app-light.css" id="lightTheme">

    <style>
        @media print {

            .aku .deskripsi,
            .btn,
            .nav,
            .tabel-card {
                display: none;
            }

            /* .cb1 {
                display: none;
            } */

            .navbarku233 {
                display: none;
            }

            #debug-icon-link {
                display: none;
            }
        }
    </style>
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <!-- Navbar atas -->
        <?= $this->include('Admin/Template_Admin/navbar_atas'); ?>

        <!-- Menu Samping -->
        <?= $this->include('Admin/Template_Admin/menu_samping'); ?>

        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Detail Data Siswa </h2>
                        <!-- <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p> -->
                        <?php if (session()->getFlashdata('pesan_insert')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('pesan_insert'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('pesan_Update')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('pesan_Update'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <!-- Alret Delete -->
                        <?php if (session()->getFlashdata('pesan_hapus')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= session()->getFlashdata('pesan_hapus'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <!-- Detail Data Kelas -->
                        <div class="row my-4">
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <?php foreach ($dataDiri->getResultArray()  as $dataDiri) : ?>
                                            <div class="row">
                                                <div class="col-5">
                                                    <br>
                                                    <center>
                                                        <img src="/assets/image/FotoSiswa/<?= $dataDiri['FOTO_SISWA']; ?>" style="width: 200px; height:200px;" alt="..." class="avatar-img rounded-circle">
                                                    </center>
                                                </div>
                                                <div class="col">
                                                    <center>
                                                        <label for="formGroupExampleInput">Nama Lengkap</label>
                                                        <input type="text" class="form-control col-md-12 mb-4" id="txtNmKelas" name="txtNmKelas" style="text-align: center;" value="<?= $dataDiri['NAMA_LENGKAP']; ?>" readonly>
                                                        <label for="formGroupExampleInput">NISN</label>
                                                        <input type="text" class="form-control col-md-12 mb-4" id="txtNmKelas" name="txtNmKelas" style="text-align: center;" value="<?= $dataDiri['NISN']; ?>" readonly>
                                                        <label for="formGroupExampleInput">NIS</label>
                                                        <input type="text" class="form-control col-md-12 mb-4" id="txtNmKelas" name="txtNmKelas" style="text-align: center;" value="<?= $dataDiri['NIS']; ?>" readonly>
                                                    </center>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>


                        </div>


                        <!-- Menu Siswa -->
                        <?= $this->include('Admin/Detail_Siswa/Menu_Detail'); ?>



                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-10">
                                                <!-- Tabs -->
                                                <h5 class="card-title">Data Kesehatan </h5>
                                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn mb-2 btn-secondary btn-sm ml-1" onclick="window.print()"><span class="fe fe-printer fe-16 mr-2"></span>Cetak</button>

                                                <!-- <button type="button" class="btn mb-2 btn-primary btn-sm ml-5" data-toggle="modal" data-target="#exampleModal">Tambah Eksul Baru</button> -->
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <table class="table table-bordered table-hover">
                                                    <thead class="thead-dark">
                                                        <tr class="d-flex">
                                                            <th class="col-4">Semester</th>
                                                            <th class="col">Berat Badan</th>
                                                            <th class="col">Tinggi Badan</th>
                                                            <th class="col">Pendegaran</th>
                                                            <th class="col">Pengelihatan</th>
                                                            <th class="col">GIGI</th>
                                                            <th class="col">Aksi</th>
                                                            <!-- <th class="col">Aksi</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1; ?>
                                                        <?php foreach ($dataabsensi->getResultArray()  as $dataabsensi) : ?>
                                                            <tr class="d-flex">
                                                                <td class="col-4">Semester <?= $dataabsensi['ID_SEMESTER']; ?></td>
                                                                <td class="col"><?= $dataabsensi['BERAT_BADAN']; ?></td>
                                                                <td class="col"><?= $dataabsensi['TINGGI_BADAN']; ?></td>
                                                                <td class="col"><?= $dataabsensi['PENDENGARAN']; ?></td>
                                                                <td class="col"><?= $dataabsensi['PENGELIHATAN']; ?></td>
                                                                <td class="col"><?= $dataabsensi['GIGI']; ?></td>
                                                                <td class="col"><button type="button" class="btn btn-secondary btn-sm btn_ubah_nilai" data-bb="<?= $dataabsensi['BERAT_BADAN']; ?>" data-tb="<?= $dataabsensi['TINGGI_BADAN']; ?>" data-pendegaran="<?= $dataabsensi['PENDENGARAN']; ?>" data-pengelihatan="<?= $dataabsensi['PENGELIHATAN']; ?>" data-gigi="<?= $dataabsensi['GIGI']; ?>" data-nisn="<?= $idNISN; ?>" data-idsemester="<?= $dataabsensi['ID_SEMESTER']; ?>">Ubah</button></td>
                                                            </tr>
                                                        <?php endforeach; ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- simple table -->
                        </div> <!-- end section -->

                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
            <!-- Large modal -->

            <!-- Modal -->
            <div class="modal fade" id="ModalUbahNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Nilai Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/C_ADMIN/Updt_absensi">
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Semester</label>
                                        <input type="text" class="form-control txtsemester" id="txtsemester" name="txtsemester" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Gigi</label>
                                        <input type="text" class="form-control txtgigi" id="txtgigi" name="txtgigi">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Berat Badan</label>
                                        <input type="text" class="form-control txtbb" id="txtbb" name="txtbb">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Tinggi Badan </label>
                                        <input type="text" class="form-control txttb" id="txttb" name="txttb">
                                        <input type="hidden" class="form-control txtnisn" id="txtnisn" name="txtnisn" value="<?= $idNISN; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Pendegaran</label>
                                        <input type="text" class="form-control txtpendegaran" id="txtpendegaran" name="txtpendegaran">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Pengelihatan </label>
                                        <input type="text" class="form-control txtpengelihatan" id="txtpengelihatan" name="txtpengelihatan">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main> <!-- main -->

    </div> <!-- .wrapper -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/simplebar.min.js"></script>
    <script src='/js/daterangepicker.js'></script>
    <script src='/js/jquery.stickOnScroll.js'></script>
    <script src="/js/tinycolor-min.js"></script>
    <script src="/js/config.js"></script>
    <script src='/js/jquery.dataTables.min.js'></script>
    <script src='/js/dataTables.bootstrap4.min.js'></script>
    <script>
        $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
    </script>
    <script src="/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>

    <script>
        $('#dokumen').ready(function() {
            // get Delete Product
            $('.btn_ubah_nilai').on('click', function() {
                // get data from button edit
                const bb = $(this).data('bb');
                const tb = $(this).data('tb');
                const pendegaran = $(this).data('pendegaran');
                const pengelihatan = $(this).data('pengelihatan');
                const gigi = $(this).data('gigi');
                const nisn = $(this).data('nisn');
                const idsemester = $(this).data('idsemester');
                // Set data to Form Edit
                $('.txtbb').val(bb);
                $('.txttb').val(tb);
                $('.txtpendegaran').val(pendegaran);
                $('.txtpengelihatan').val(pengelihatan);
                $('.txtgigi').val(gigi);
                // $('.txtidmapel').val(nisn);
                $('.txtsemester').val(idsemester);
                // Call Modal Edit
                $('#ModalUbahNilai').modal('show');
            });
        });
    </script>
</body>

</html>