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
                    Form Input Data Penerima Bantuan
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K1</label>
                                <select name="k1" id="k1" class="form-control">
                                    <option value="lebih">Lebih</option>
                                    <option value="kurang">Kurang</option>
                                </select>
                                <small id="" class="form-text text-muted">Luas Lantai Bangunan Tempat Tinggal Kurang dari 8 M2 per Orang.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K2</label>
                                <select name="k2" id="k2" class="form-control">
                                    <option value="kayu_murahan">Kayu Murahan</option>
                                    <option value="semen">Semen</option>
                                </select>
                                <small id="" class="form-text text-muted">Jenis Lantai Tempat Tinggal Terbuat Dari Tanah/Bambu/Kayu Murahan.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K3</label>
                                <select name="k3" id="k3" class="form-control">
                                    <option value="kayu_berkualitas_rendah">Kayu Berkualitas Rendah</option>
                                    <option value="tembok_tanpa_diplaster">Tembok Tanpa Diplaster</option>
                                    <option value="tembok_diplaster">Tembok diPlaster</option>
                                </select>
                                <small id="" class="form-text text-muted">Jenis Dinding Tempat Tinggal Dari Bambu/Rumbia/Kayu Berkualitas Rendah/Tembok Tanpa Diplester.</small>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K4</label>
                                <select name="k4" id="k4" class="form-control">
                                    <option value="memiliki_fasilitas_bab">Memiliki Fasilitas BAB</option>
                                    <option value="tidak_memiliki">Tidak Memiliki</option>
                                </select>
                                <small id="" class="form-text text-muted">Tidak Memiliki Fasilitas Buang Air Besar/Bersama-sama dengan Rumah Tangga Lain.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K5</label>
                                <select name="k5" id="k5" class="form-control">
                                    <option value="menggunakan_listrik">Menggunakan Listrik</option>
                                    <option value="tidak_menggunakan_listrik">Tidak Menggunakan Listrik</option>
                                </select>
                                <small id="" class="form-text text-muted">Sumber Penerangan Rumah Tangga Tidak Menggunakan Listrik.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K6</label>
                                <select name="k6" id="k6" class="form-control">
                                    <option value="sumur">Sumur</option>
                                    <option value="sungai">Sungai</option>
                                </select>
                                <small id="" class="form-text text-muted">Sumber Air Minum Berasal Dari Sumur/Mata Air Tidak Terlindung/Sungai/Air Hujan.</small>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K7</label>
                                <select name="k7" id="k7" class="form-control">
                                    <option value="kayu_bakar">Kayu Bakar</option>
                                    <option value="gas_lpg">Gas LPG</option>
                                </select>
                                <small id="" class="form-text text-muted">Bahan Bakar untuk Memasak Sehari-Hari adalah Kayu Bakar/Arang/Minyak Tanah.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K8</label>
                                <select name="k8" id="k8" class="form-control">
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                                <small id="" class="form-text text-muted">Hanya Mengkonsumsi Daging/Susu/Ayam dalam Satu Kali Seminggu.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K9</label>
                                <select name="k9" id="k9" class="form-control">
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                                <small id="" class="form-text text-muted">Hanya Membeli Satu Stel Pakaian Baru dalam Setahun.</small>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">k10</label>
                                <select name="k10" id="k10" class="form-control">
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                                <small id="" class="form-text text-muted">Hanya Sanggup Makan Sebanyak Satu/Dua kali Dalam sehari.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K11</label>
                                <select name="k11" id="k11" class="form-control">
                                    <option value="sanggup">Sanggup</option>
                                    <option value="tidak_sanggup">Tidak Sanggup</option>
                                </select>
                                <small id="" class="form-text text-muted">Tidak Sanggup Membayar Biaya Pengobatan DiPuskesmas/Poliklinik.</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K12</label>
                                <select name="k12" id="k12" class="form-control">
                                    <option value="petani">Petani</option>
                                    <option value="pedagang">Pedagang</option>
                                    <option value="karyawan_swasta">Karyawan Swasta</option>
                                </select>
                                <small id="" class="form-text text-muted">Sumber Penghasilan Kepala Rumah Tangga Adalah : Petani dengan Luas Lahan 500M2, Buruh Tani, Nelayan, Buruh Bangunan, Buruh Perkebunan dan atau Pekerjaan Lainnya dengan Pendapatan Dibawah Rp. 600.000,- per bulan.</small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K13</label>
                                <select name="k13" id="k13" class="form-control">
                                    <option value="tidak_tamat_sd">Tidak Tamat SD</option>
                                    <option value="tamat_sd">Tamat SD</option>
                                    <option value="tamat_sma">Tamat SMA</option>
                                </select>
                                <small id="" class="form-text text-muted">Pendidikan Tertinggi Kepala Rumah Tangga: Tidak Sekolah/Tidak Tamat SD/Tamat SD.</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">K14</label>
                                <select name="k14" id="k14" class="form-control">
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                                <small id="" class="form-text text-muted">Tidak Memiliki Tabungan/Barang atau aset yang mudah dijual dengan minimal sebesar Rp. 500.000,- Seperti sepeda motor yang belum lunas atau kredit/tidak kredit, emas, ternak, kapal motor, atau barang modal lainnya.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button id="cek" class="btn btn-md btn-success"><i class="fa fa-search"></i> Cari</button> 
                    <img style="display:none" id="load_btn_gif" src="/assets/dist/img/load.gif" width="15px"></img><span style="display:none" id="load_btn_text"> Please Wait... Sedang Proses Klasifikasi</span> 
                </div>
            </div><!-- /.card -->
            
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                    Hasil Klasifikasi
                    </h3>
                </div>
                <div class="card-body">
                    <span class="text-danger" id="load_body_text1" style="font-weight:bold">Silahkan Masukkan Data dan Tekan Tombol cari</span>

                    <img style="display:none" id="load_body_gif" src="/assets/dist/img/load.gif" width="20px"></img><span style="display:none" id="load_body_text2"> Mohon Tunggu sebentar :D</span>

                    <div>
                        <span id="rekom"></span>
                    </div>
                    <div id="rule">
                        
                    </div>
                </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

<div class="modal fade " tabindex="-1" role="dialog" id="petunjuk">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Penjelasan Atribut inputan <b>K1 - K14</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>Penjelasan K1 Hingga K14</b>
                <ul>
                    <li>K1 = <b>Luas Lantai Bangunan Tempat Tinggal Kurang dari 8 M2 per Orang</b></li>
                    <li>K2 = <b>Jenis Lantai Tempat Tinggal Terbuat Dari Tanah/Bambu/Kayu Murahan</b></li>
                    <li>K3 = <b>Jenis Dinding Tempat Tinggal Dari Bambu/Rumbia/Kayu Berkualitas Rendah/Tembok Tanpa Diplester</b></li>
                    <li>K4 = <b>Tidak Memiliki Fasilitas Buang Air Besar/Bersama-sama dengan Rumah Tangga Lain</b></li>
                    <li>K5 = <b>Sumber Penerangan Rumah Tangga Tidak Menggunakan Listrik</b></li>
                    <li>K6 = <b>Sumber Air Minum Berasal Dari Sumur/Mata Air Tidak Terlindung/Sungai/Air Hujan</b></li>
                    <li>K7 = <b>Bahan Bakar untuk Memasak Sehari-Hari adalah Kayu Bakar/Arang/Minyak Tanah</b></li>
                    <li>K8 = <b>Hanya Mengkonsumsi Daging/Susu/Ayam dalam Satu Kali Seminggu</b></li>
                    <li>K9 = <b>Hanya Membeli Satu Stel Pakaian Baru dalam Setahun</b></li>
                    <li>K10 = <b>Hanya Sanggup Makan Sebanyak Satu/Dua kali Dalam sehari</b></li>
                    <li>K11 = <b>Tidak Sanggup Membayar Biaya Pengobatan DiPuskesmas/Poliklinik</b></li>
                    <li>K12 = <b>Sumber Penghasilan Kepala Rumah Tangga Adalah : Petani dengan Luas Lahan 500M2, Buruh Tani, Nelayan, Buruh Bangunan, Buruh Perkebunan dan atau Pekerjaan Lainnya dengan Pendapatan Dibawah Rp. 600.000,- per bulan</b></li>
                    <li>K13 = <b>Pendidikan Tertinggi Kepala Rumah Tangga: Tidak Sekolah/Tidak Tamat SD/Tamat SD</b></li>
                    <li>K14 = <b>Tidak Memiliki Tabungan/Barang atau aset yang mudah dijual dengan minimal sebesar Rp. 500.000,- Seperti sepeda motor yang belum lunas atau kredit/tidak kredit, emas, ternak, kapal motor, atau barang modal lainnya</b></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>