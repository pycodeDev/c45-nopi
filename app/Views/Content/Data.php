<?= $this->extend('Index') ?>
<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <?php echo $title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  Data Renerima Bantuan
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <button class="btn btn-sm btn-success" data-toggle="modal" data-target=".upload-train-data">Import Excel</button>
                    </li>
                    <?php
                    if (count($data) > 0) {?>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-danger" href="/data/del">Hapus</a>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                    <table id="data" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK Pengurus</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No_KKS</th>
                                <th>Jenis</th>
                                <th>Rekening</th>
                                <th>BPNT_NOKKS</th>
                                <th>Detail Atribut</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            if (count($data) > 0) {
                              $no = 1;
                              foreach ($data as $value):
                              ?>
                              <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value['nik']; ?></td>
                                <td><?php echo $value['nama']; ?></td>
                                <td><?php echo $value['alamat']; ?></td>
                                <td><?php echo $value['no_kks']; ?></td>
                                <td><?php echo $value['jenis']; ?></td>
                                <td><?php echo $value['rek']; ?></td>
                                <td><?php echo $value['bpnt_nokks']; ?></td>
                                <td><button class="btn btn-sm btn-primary" data-id="<?php echo $value['id']; ?>" onclick="get_data(this.getAttribute('data-id'))"><i class="fa fa-eye"></i></button></td>
                                <td>
                                  <button class="btn btn-sm btn-warning" data-id="<?php echo $value['id']; ?>" onclick="edit(this.getAttribute('data-id'))"><i class="fa fa-pencil-alt text-white"></i></button>
                                </td>
                              </tr>
                            <?php
                              endforeach;
                            }else {
                          ?>
                            <tr>
                                <td colspan="10"><b>Tidak ada Data</b></td>
                            </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                    </table>
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?= $this->endSection() ?>