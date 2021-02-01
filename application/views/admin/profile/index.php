<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <small>
            <div class="text-muted"> Profile &nbsp; / &nbsp; <a href="<?php echo base_url("admin/profile"); ?>">My
                    profile</a>
            </div>
        </small>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 700px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile akun</h6>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php $no = 1;
                foreach ($user as $ad) : ?>
                <img src="<?= base_url('assets/images/profile/') . $ad->image ?>" class="card-img" alt="..."
                    width="200%">
            </div>


            <div class="col-md-8">
                <div class="card-body">

                    <h5 class="card-title text-dark">Name&nbsp;: <?= $ad->name ?></h5>
                    <h5 class="card-title text-dark">Email &nbsp;: <?= $ad->email ?></h5>
                    <h5 class="card-title text-dark">Dinas &nbsp;: <?= $ad->nama_dinas ?></h5>
                    <p class="card-text "><small class="text-muted">Tgl.
                            pembuatan,&nbsp;<?= date('d  F Y H:i:s', ($ad->date_created)); ?></small>
                        <?php endforeach ?>
                        <br>
                        <br>
                        <a href="<?php echo base_url("admin/profile/edit"); ?>" class="btn btn-primary">Edit Profile</a>
                        <a href="<?php echo base_url("admin/Change_Password"); ?>" class="btn btn-primary">Ubah
                            Password</a>

                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->