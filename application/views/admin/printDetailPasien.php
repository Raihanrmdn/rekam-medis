<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/sb-admin-2.css">

    <title> <?= $title; ?> </title>
</head>

<body>
    <h2 class="mb-auto align-center"><b>Klinik Dr RIA</b></h2>
    <h3>Detail & Rekam Medis Pasien</h3>

    <div class="card col-lg-5 float-left shadow mb-4 ">
        <div class="card-body ">
            <div class="table-responsive">
                <h4><b><?= $pasien['name']; ?> (<?= timespan(strtotime($pasien['date_of_birth']), time(), 1); ?> Old) </b></h4>
                <h4> <b> NO : <?= $pasien['medical_record_number']; ?></b></h4>
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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Rekam Medis</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Dokter</th>
                <th scope="col">Anamnesa</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Terapi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($medis as $m) : ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $m['id']; ?></td>
                    <td><?= $m['date']; ?></td>
                    <td><?= $m['dokter']; ?></td>
                    <td><?= $m['anamnesa']; ?></td>
                    <td><?= $m['diagnosa']; ?></td>
                    <td><?= $m['theraphy']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>



</html>

<br><br><br><br><br><br>
<?= date("d M Y"); ?>
<br><br><br><br><br><br>
Mengetahui <br>


<script type="text/javascript">
    window.print();
</script>