<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Medical Records</h1>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-12">
            <a href="<?= base_url('admin/printRekamMedis'); ?>" class="btn btn-success mb-3" target="_blank"><i class="fa fa-print"></i> Print</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive table-hover">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Id Medical Record</th>
                                    <th scope="col">Id Patient</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Dokter</th>
                                    <th scope="col">Anamnesa</th>
                                    <th scope="col">Diagnosa</th>
                                    <th scope="col">Theraphy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php $i = 1; ?> -->
                                <?php foreach ($medis as $m) : ?>
                                    <tr>
                                        <th scope="col"> <?= $i; ?></th>
                                        <td><?= $m['id']; ?></td>
                                        <td><?= $m['medical_record_number']; ?></td>
                                        <td><?= date('d M Y || H:i:s', strtotime($m['date'])); ?></td>
                                        <td><?= $m['dokter']; ?></td>
                                        <td><?= $m['anamnesa']; ?> </td>
                                        <td><?= $m['diagnosa']; ?></td>
                                        <td><?= $m['theraphy']; ?></td>
                                    </tr>
                                    <!-- <?= $i++; ?> -->
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->