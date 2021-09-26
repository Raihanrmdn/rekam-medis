<!-- Begin Page Content -->
<div class="container-fluid" id="content">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
                        <td>Registered Since</td>
                        <td>: <?= date('d M Y', strtotime($pasien['date_registered'])); ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <div class="card col-lg-6 float-right shadow mb-4">
        <div class="card-body">
            <div class="col-lg">
                <h5><b>Medical Record</b></h5>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover responsive">
                <tr>
                    <td>Dokter</td>
                    <td> : </td>
                    <td> <?= $detailMedis['dokter']; ?> </td>
                </tr>
                <tr>
                    <td>Anamnesa</td>
                    <td>: </td>
                    <td><?= $detailMedis['anamnesa']; ?> </td>
                </tr>
                <tr>
                    <td>Diagnosa</td>
                    <td>: </td>
                    <td><?= $detailMedis['diagnosa']; ?> </td>
                </tr>
                <tr>
                    <td>Theraphy</td>
                    <td>: </td>
                    <td><?= $detailMedis['theraphy']; ?></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>: </td>
                    <td><?= date('d M Y || H:i:s', strtotime($detailMedis['date'])); ?></td>
                </tr>
            </table>
            <a href="<?= base_url('admin/detailPasien/'); ?><?= $detailMedis['medical_record_number']; ?>" class="btn btn-secondary mb-3 float-right ml-3 d-print-none ">Back</a>

            <button type="button" class="btn btn-success mb-3 float-right ml-3 d-print-none" onclick="printContent('content')"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->