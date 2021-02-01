<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Pengguna</h1>
        <?php $no = 1;
        foreach ($users as $usr) : ?>
        <small>
            <div class="text-muted"> Manajemen pengguna &nbsp;/&nbsp; Pengguna&nbsp; /&nbsp; <a
                    href="<?= base_url() . 'admin/users/detail/' . $usr->id_user ?>">Detail Pengguna</a></div>
        </small>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 700px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Akun Pengguna</h6>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php $no = 1;
                foreach ($users as $usr) : ?>
                <img src="<?= base_url('assets/images/profile/') . $usr->image ?>" class="card-img" alt="...">
            </div>


            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title text-dark">Name&nbsp;: <?= $usr->name ?></h5>
                    <h5 class="card-title text-dark">Email &nbsp;: <?= $usr->email ?></h5>
                    <h5 class="card-title text-dark">Dinas &nbsp;: <?= $usr->nama_dinas ?></h5>
                    <h5 class="card-title text-dark">Role &nbsp;: <?= $usr->role ?></h5>
                    <h5 class="card-title text-dark">Status&nbsp;: <?php if ($usr->is_active == "aktif") : ?>
                        <td class="project-state">
                            <span class="badge badge-success"><?= $usr->is_active ?></span>
                        </td>
                        <?php else : ?>
                        <td class="project-state">
                            <span class="badge badge-danger"><?= $usr->is_active ?></span>
                        </td>
                        <?php endif ?>
                    </h5>
                    <p class="card-text "><small class="text-muted">Tanggal
                            pembuatan,&nbsp;<?= date('d  F Y H:i:s', ($usr->date_created)); ?></small>

                        <?php endforeach ?>
                    <p>

                        <a href="<?php echo base_url("admin/users"); ?>" class="btn btn-primary">Kembali</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->