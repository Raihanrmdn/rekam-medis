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
    <h3>Data Pasien</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Pasien</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Profesi</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($pasien as $p) :  ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $p['medical_record_number']; ?></td>
                    <td><?= $p['name']; ?></td>
                    <td><?= $p['place_of_birth']; ?></td>
                    <td><?= $p['date_of_birth']; ?></td>
                    <td><?= $p['religion']; ?></td>
                    <td><?= $p['gender']; ?></td>
                    <td><?= $p['profession']; ?></td>
                    <td><?= $p['phone_number']; ?></td>
                    <td><?= $p['address']; ?></td>
                    <td><?= $p['date_registered']; ?></td>
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