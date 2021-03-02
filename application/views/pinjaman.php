<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan Pemda
            </h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">Pemda</th>
                            <th colspan="3" class="text-center">Usulan Pinjaman PEN</th>
                            <th colspan="3" class="text-center">Penandatanganan Perjanjian <br>Pinjaman PEN Daerah</th>
                            <th rowspan="2">Status</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Nilai</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Pemda</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
                            <th>Nilai</th>
                            <th>Nomor</th>
                            <th>Tanggal</th>
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
                                <td>Rp. <?= number_format($row->usulan_nilai, '0', ',', '.') ?></td>
                                <td><?= $row->acc_nomor ?></td>
                                <td><?= $row->acc_tanggal ?></td>
                                <td>Rp. <?= number_format($row->acc_nilai, '0', ',', '.') ?></td>
                                <td><?= $row->status ?></td>
                                <td></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->