<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <small>
            <div class="text-muted"> Home &nbsp;/&nbsp; <a href="<?php echo base_url("admin/home"); ?>">Dashboard</a>
            </div>
        </small>
    </div>

    <div class="alert alert-primary" role="alert">
        <?php
        foreach ($user as $ad) : ?>
        Selamat Datang <b><?=$ad->name ?></b> di halaman peminjaman inventaris barang Diskominfo Batu
        <?php endforeach; ?>
        <hr>
        1. Pilih barang yang dipinjam
        <br>
        2. Tunggu Persetujuan Admin
        <br>
        3. Apabila sudah <b>disetujui</b> Silahkan datang ke Kantor Kominfo
        <br>
        4. Pengembalian barang akan dikonfirmasi oleh admin
    </div>
    <!-- Content Row -->
    <div class="row">

    </div>
</div>
</div>