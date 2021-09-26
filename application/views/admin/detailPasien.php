<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= $this->session->flashdata('message'); ?>

    <div class="card col-lg-5 float-left shadow mb-4 ">
        <div class="card-body ">
            <div class="table-responsive">
                <h4><b><?= $pasien['name']; ?> (<?= timespan(strtotime($pasien['date_of_birth']), time(), 1); ?> Old) </b></h4>
                <h4> <b> ID : <?= $pasien['medical_record_number']; ?></b></h4>
            </div>
            <div class="card-body">
                <table class="table-responsive">
                    <tr>
                        <td>Place/Date Of Birth</td>
                        <td> : <?= $pasien['place_of_birth']; ?>, <?= date('d M Y', strtotime($pasien['date_of_birth'])); ?></td>
                    </tr>
                    <tr>
                        <td>Religion</td>
                        <td>: <?= $pasien['religion']; ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>: <?= $pasien['gender']; ?></td>
                    </tr>
                    <tr>
                        <td>Profession</td>
                        <td>: <?= $pasien['profession']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: <?= $pasien['phone_number']; ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>: <?= $pasien['address']; ?></td>
                    </tr>
                    <tr>
                        <td>Medicine Allergy</td>
                        <td>: <?= $pasien['allergy']; ?></td>
                    </tr>
                    <tr>
                        <td>Registered Since</td>
                        <td>: <?= date('d M Y', strtotime($pasien['date_registered'])); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <a href="<?= base_url('admin/pasien'); ?>" class="btn btn-secondary mb-2">Back</a>
    </div>

    <div class="card col-lg-6 float-right shadow mb-4">
        <div class="card-body">
            <h5><b>Medical Records</b></h5>

            <a href="<?= base_url('admin/printDetailPasien/'); ?><?= $pasien['medical_record_number']; ?>" class="btn btn-success float-right" target="_blank">Print</a>

            <a href="" class="btn btn-primary float-right mr-5" data-toggle="modal" data-target="#newMedicalModal">Add Medical Record</a>
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover">
                <table class="table table-hover responsive" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Anamnesa</th>
                            <th scope="col" class="text-center">Dokter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($medis as $m) : ?>
                            <tr onclick="document.location.href=('<?= base_url('admin/detailMedis/') . $m['id']; ?>')">
                                <td><?= date('d M Y || H:i:s', strtotime($m['date'])); ?></td>
                                <td><?= $m['anamnesa']; ?></td>
                                <td><?= $m['dokter']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal Add Medical -->
<div class="modal fade" id="newMedicalModal" tabindex="-1" aria-labelledby="newMedicalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMedicalModalLabel">Medical Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/medis_add'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <!-- <label for="medicalid">ID Medical</label> -->
                        <input type="hidden" class="form-control" id="medicalid" name="medicalid" value="<?= $medicalid; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="medical_record_number">ID Pasient</label>
                        <input type="text" class="form-control" id="medical_record_number" name="medical_record_number" value="<?= $pasien['medical_record_number']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter</label>
                        <select class="form-control" name="dokter" id="dokter">
                            <option value="Dr. Ria">Dr. Ria</option>
                            <option value="Dr. Annajmi">Dr. Annajmi</option>
                        </select>
                    </div>
                    <div class="form-group form-floating">
                        <label for="anamnesa">Anamnesa</label>
                        <textarea class="form-control" placeholder="Anamnesa" id="anamnesa" name="anamnesa"></textarea>
                    </div>
                    <div class="form-group form-floating">
                        <label for="diagnosa">Diagnosa</label>
                        <textarea class="form-control" placeholder="Diagnosa" id="diagnosa" name="diagnosa"></textarea>
                    </div>
                    <div class="form-group form-floating">
                        <label for="terapi">Theraphy</label>
                        <textarea class="form-control" placeholder="Theraphy" id="terapi" name="terapi"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Medical Record</button>
                </div>
            </form>
        </div>
    </div>
</div>