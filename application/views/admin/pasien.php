<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Patients</h1>

    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-12">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPatientModal">Add New Patient</a>
            <a href="<?= base_url('admin/printPasien'); ?>" class="btn btn-success mb-3 ml-5" target="_blank"><i class="fa fa-print"></i> Print</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive table-hover">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Id Patient</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php $i = 1; ?> -->
                                <?php foreach ($pasien as $p) : ?>
                                    <tr>
                                        <th scope="col"> <?= $i; ?></th>
                                        <td><?= $p['name']; ?></td>
                                        <td><?= $p['medical_record_number']; ?></td>
                                        <td><?= $p['address']; ?></td>
                                        <td align="center">
                                            <a href="<?= base_url('admin/detailPasien/') . $p['medical_record_number']; ?>" class="btn btn-primary btn-icon-split">
                                                <span class="icon text-white-100">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                            </a>
                                            <a href="<?= base_url('admin/editPasien/') . $p['medical_record_number']; ?>" class="btn btn-success btn-icon-split mx-1">
                                                <span class="icon text-white-100">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </a>
                                            <a href="<?= base_url('admin/hapusPasien/') . $p['medical_record_number']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Are you sure want to delete this patient?');">
                                                <span class="icon text-white-100">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </a>
                                        </td>
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

<!-- Modal -->
<div class="modal fade" id="newPatientModal" tabindex="-1" aria-labelledby="newPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPatientModalLabel">Tambah Pasien Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/pasien_add'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="medical_record_number">Medical Record Number</label>
                        <input type="text" class="form-control" id="medical_record_number" name="medical_record_number" value="<?= $pasien_id; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="place_of_birth">Place Of Birth</label>
                        <input type="text" class="form-control" id="place_of_birth" name="place_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <select class="form-control" name="religion" id="religion">
                            <option value="Islam">Islam</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="allergy">Medicine Allergy</label>
                        <input type="text" class="form-control" id="allergy" name="allergy">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Patient</button>
                </div>
            </form>
        </div>
    </div>
</div>