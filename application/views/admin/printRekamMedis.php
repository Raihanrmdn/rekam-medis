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
    <h3>Data Rekam Medis</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Medis</th>
                <th scope="col">ID Pasien</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Dokter</th>
                <th scope="col">Anamnesa</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Terapi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($medical as $m) :  ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $m['id']; ?></td>
                    <td><?= $m['medical_record_number']; ?></td>
                    <td><?= date('d M Y || H:i:s', strtotime($m['date'])); ?></td>
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