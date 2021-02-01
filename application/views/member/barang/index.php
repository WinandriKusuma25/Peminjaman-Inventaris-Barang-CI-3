<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Barang</h1>
        <small>
            <div class="text-muted">Peminjaman &nbsp;/&nbsp; <a href="<?php echo base_url("admin/barang"); ?>">Daftar
                    Barang</a>
            </div>
        </small>


    </div>

    <div class=" d-flex flex-wrap">
        <?php foreach ($barang as $ad): ?>
        <div class="card mr-3 mb-3" style="width:330px; height:430px">
            <center><img src="<?= base_url('assets/images/barang/') . $ad->image ?>" style="width:250px; height:300px;">
            </center>

            <hr>
            <center>

                <p class="card-text"><b><?= $ad->nama ?></b></p>
            </center>

            <center>
                <label class="text-dark">Kondisi : </label>
                <?php if ($ad->kondisi == "baik") : ?> <span class="badge badge-success">
                    <?= $ad->kondisi ?></span>
                <?php else : ?>
                <span class="badge badge-danger"><?= $ad->kondisi ?></span>

                <?php endif ?>
                <br>
                <label class="text-dark">Ketersedian : </label>
                <?php if ($ad->ketersedian == "ada") : ?> <span class="badge badge-success">
                    <?= $ad->ketersedian ?></span>
                <?php else : ?>
                <span class="badge badge-danger"><?= $ad->ketersedian ?></span>
                <?php endif ?>
                <br>
                <!-- <hr>


                <a class='btn btn-primary ' href='<?= base_url() . 'member/barang/detail/' . $ad->id_barang ?>'>
                    Pinjam
                </a> -->

            </center>


        </div>
        <?php endforeach ?>
    </div>
</div>
</div>