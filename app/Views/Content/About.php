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
              <div class="card-body">
                <h5 class="card-title">Tentang</h5>
                <div class="text-center">
                    <img src="/assets/dist/img/about.jpeg" width="30%" alt="">

                    <p><b>Selamat datang Di Sistem Klasifikasi Penerima Bantuan Untuk Mendapatkan Rekomendasi Penerima Yang Tepat.</b></p>
                </div>
                
              </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?= $this->endSection() ?>