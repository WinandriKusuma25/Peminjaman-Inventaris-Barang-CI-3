<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container-fluid">
    </script>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
        <small>
            <div class="text-muted"> Manajemen pengguna &nbsp;/&nbsp; <a
                    href="<?php echo base_url("admin/users"); ?>">Pengguna</a>
            </div>
        </small>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Berikut merupakan data pengguna </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-primary">No</th>
                            <th class="text-primary">Nama</th>
                            <th class="text-primary">Email</th>
                            <!-- <th class="text-primary">Picture</th> -->
                            <th class="text-primary">Status</th>
                            <!-- <th class="text-primary">Date Created</th> -->
                            <th class="text-primary">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($users as $usr) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $usr->name ?></td>
                            <td><?= $usr->email ?></td>
                            <!-- <td><img src="<?= base_url('assets/images/profile/') . $usr->image ?>"
                                        style="width:100px; height:100px;" class="img-thumbnail"></td> -->
                            <?php if ($usr->is_active == "aktif") : ?>
                            <td class="project-state">
                                <span class="badge badge-success"><?= $usr->is_active ?></span>
                            </td>
                            <?php else : ?>
                            <td class="project-state">
                                <span class="badge badge-danger"><?= $usr->is_active ?></span>
                            </td>
                            <?php endif ?>
                            <!-- <td><?= date('d  F Y H:i:s', ($usr->date_created)); ?></td> -->

                            <td>
                                <a class='btn btn-primary'
                                    href='<?= base_url() . 'admin/users/detail/' . $usr->id_user ?>'
                                    class='btn btn-biru'>
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<!-- Modal -->
<?php $no = 0;
foreach ($users as $usr) : $no++ ?>
<div class="modal fade" id="modalDetail  <?= $usr->id_user ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $usr->name ?>
            </div>
            <div class="modal-footer">
                <form id="formDetail" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>