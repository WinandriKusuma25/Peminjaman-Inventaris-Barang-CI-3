<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
        <small>
            <div class="text-muted"> Dashboard &nbsp;/&nbsp; Profile &nbsp; / &nbsp; <a
                    href="<?php echo base_url("member/Change_Password"); ?>">Ubah Password</a>
            </div>
        </small>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Password</h6>
                </div>

                <di class="card-body">
                    <form method="post" action="<?= base_url('member/Change_Password/changePassword'); ?>">

                        <div class="form-group">
                            <label for="current_password">Password Lama</label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="new_password1">Password Baru</label>
                            <input type="password" class="form-control" id="new_password1" name="new_password1">
                            <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="new_password2">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                            <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>

                        <div class="form-group">
                            <button type="submit" class=" btn btn-primary">Ubah Password</button>
                            <a href="<?php echo base_url("member/profile"); ?>" class="btn btn-primary">
                                Kembali </a>
                        </div>

                        <link href="<?= base_url(); ?>assets/dark/dark-mode.css" rel="stylesheet" type="text/css">
                    </form>
            </div>
            <br>
        </div>
    </div>
</div>
</div>