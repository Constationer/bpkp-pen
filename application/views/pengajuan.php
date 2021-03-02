<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan Pemda <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-fw fa-plus"></i></button>
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Pemda</th>
                            <th colspan="4" class="text-center">Usulan Pinjaman PEN</th>
                            <th rowspan="2">Status</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Perihal</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Pemda</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Perihal</th>
                            <th>Nilai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->usulan_nomor ?></td>
                                <td><?= $row->usulan_tanggal ?></td>
                                <td><?= $row->usulan_perihal ?></td>
                                <td>Rp. <?= number_format($row->usulan_nilai, '0', ',', '.') ?></td>
                                <td><?= $row->status ?></td>
                                <td>
                                    <?php if ($row->status == "Menunggu Penandatanganan Perjanjian Pinjaman") : ?>
                                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalPenandatanganan<?= $row->idp ?>">Proses</button>
                                    <?php endif ?>
                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalCetak<?= $row->idp ?>">Cetak</button>
                                </td>
                            </tr>

                            <!-- Modal Penandatanganan Perjanjian Pinjaman PEN Daerah-->
                            <div class="modal fade" id="modalPenandatanganan<?= $row->idp ?>" tabindex="-1" role="dialog" aria-labelledby="modalPenandatangananLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalPenandatangananLabel">Penandatanganan Perjanjian Pinjaman PEN Daerah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <form action="<?= base_url('pengajuan/penandatanganan/' . $row->idp) ?>" method="POST">
                                                    <div class="form-group">
                                                        <label>Nomor</label>
                                                        <input type="text" class="form-control" name="nomor" placeholder="Cth: 900/2109/Bappeda/2020" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <input type="date" class="form-control" name="tanggal" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nilai</label>
                                                        <input type="text" class="form-control" id="nilai" name="acc_nilai" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Tambah Usulan Pemda -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pemda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form action="<?= base_url('pengajuan/tambah') ?>" method="POST">
                            <div class=" form-group">
                                <label>Pemda</label>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <select class="js-dropdown-basic form-control" name="pemda" required>
                                            <option></option>
                                            <?php foreach ($pemda as $row) : ?>
                                                <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor</label>
                                <input type="text" class="form-control" name="nomor" placeholder="Cth: 900/2109/Bappeda/2020" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label>Perihal</label>
                                <input type="text" class="form-control" name="perihal" required>
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <input type="text" class="form-control" id="usulan_nilai" name="nilai" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->