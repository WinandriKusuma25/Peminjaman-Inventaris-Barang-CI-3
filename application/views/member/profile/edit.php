<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
        <small>
            <div class="text-muted"> My Profile &nbsp;/&nbsp; My Profile &nbsp; / &nbsp; <a
                    href="<?php echo base_url("member/profile/edit"); ?>">Edit Profile</a>
            </div>
        </small>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                </div>
                <?php $no = 1;
                foreach ($user as $ad) : ?>
                <div class="card-body">
                    <?= form_open_multipart('member/profile/edit'); ?>
                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" readonly
                                value="<?= $ad->email; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">Dinas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dinas" name="dinas" readonly
                                value="<?= $ad->nama_dinas; ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="text" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $ad->name; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class=" form-group row">
                        <div class="col-sm-2">Foto</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/images/profile/') . $ad->image ?>"
                                        class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>

                    <div class="form-group row justify-content-end">

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="<?php echo base_url("member/profile"); ?>" class="btn btn-primary">
                                Back </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</div>