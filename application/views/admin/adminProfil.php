<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg-8">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">

                <div class="row g-0">
                    <div class="col-md-4 ml-2">
                        <img src="<?= base_url('assets/img/profile/') . $admin['image']; ?>" height="200px" width="180px">
                    </div>
                    <div class="col md-8">
                        <div class="h3 font-weight-bold text-primary text-uppercase mb-1">
                            <?= $admin['name']; ?></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3"><?= $admin['email']; ?></div>
                        <div class="h5 mb-0 font-weight-bold text-dark-800">Since <?= date('d M Y', strtotime($admin['date_created'])); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->