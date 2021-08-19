<!-- Modal Upload Data Excel -->
<div class="modal fade upload-train-data" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Excel Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo "/data/upload" ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <div class="input-group">
                    <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label text-left" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-danger">Silahkan Ikuti File Yang di upload Seperti Dibawah Ini.</span>
                </div>
                <div class="scrollmenu">
                    <img src="/assets/dist/img/data_upload.png">
                </div>

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
                <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Cek Atribut -->
<div class="modal fade detail-atr" tabindex="-1" role="dialog" id="det-atr">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Atribut</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body body-conten">
                <table class="table table-bordered">
                    <tr>
                        <td><b>Atribut</b></td>
                        <td><b>Nilai</b></td>
                    </tr>
                    <tr>
                        <td><b>K1(Luas Lantai Bangunan Tempat Tinggal Kurang dari 8 M2 per Orang)</b></td>
                        <td id="k1"></td>
                    </tr>
                    <tr>
                        <td><b>K2(Jenis Lantai Tempat Tinggal Terbuat Dari Tanah/Bambu/Kayu Murahan)</b></td>
                        <td id="k2"></td>
                    </tr>
                    <tr>
                        <td><b>K3(Jenis Dinding Tempat Tinggal Dari Bambu/Rumbia/Kayu Berkualitas Rendah/Tembok Tanpa Diplester)</b></td>
                        <td id="k3"></td>
                    </tr>
                    <tr>
                        <td><b>K4(Tidak Memiliki Fasilitas Buang Air Besar/Bersama-sama dengan Rumah Tangga Lain)</b></td>
                        <td id="k4"></td>
                    </tr>
                    <tr>
                        <td><b>K5(Sumber Penerangan Rumah Tangga Tidak Menggunakan Listrik)</b></td>
                        <td id="k5"></td>
                    </tr>
                    <tr>
                        <td><b>K6(Sumber Air Minum Berasal Dari Sumur/Mata Air Tidak Terlindung/Sungai/Air Hujan)</b></td>
                        <td id="k6"></td>
                    </tr>
                    <tr>
                        <td><b>K7(Bahan Bakar untuk Memasak Sehari-Hari adalah Kayu Bakar/Arang/Minyak Tanah)</b></td>
                        <td id="k7"></td>
                    </tr>
                    <tr>
                        <td><b>K8(Hanya Mengkonsumsi Daging/Susu/Ayam dalam Satu Kali Seminggu)</b></td>
                        <td id="k8"></td>
                    </tr>
                    <tr>
                        <td><b>K9(Hanya Membeli Satu Stel Pakaian Baru dalam Setahun)</b></td>
                        <td id="k9"></td>
                    </tr>
                    <tr>
                        <td><b>K10(Hanya Sanggup Makan Sebanyak Satu/Dua kali Dalam sehari)</b></td>
                        <td id="k10"></td>
                    </tr>
                    <tr>
                        <td><b>K11(Tidak Sanggup Membayar Biaya Pengobatan DiPuskesmas/Poliklinik)</b></td>
                        <td id="k11"></td>
                    </tr>
                    <tr>
                        <td><b>K12(Sumber Penghasilan Kepala Rumah Tangga Adalah : Petani dengan Luas Lahan 500M2, Buruh Tani, Nelayan, Buruh Bangunan, Buruh Perkebunan dan atau Pekerjaan Lainnya dengan Pendapatan Dibawah Rp. 600.000,- per bulan)</b></td>
                        <td id="k12"></td>
                    </tr>
                    <tr>
                        <td><b>K13(Pendidikan Tertinggi Kepala Rumah Tangga: Tidak Sekolah/Tidak Tamat SD/Tamat SD)</b></td>
                        <td id="k13"></td>
                    </tr>
                    <tr>
                        <td><b>K14(Tidak Memiliki Tabungan/Barang atau aset yang mudah dijual dengan minimal sebesar Rp. 500.000,- Seperti sepeda motor yang belum lunas atau kredit/tidak kredit, emas, ternak, kapal motor, atau barang modal lainnya)</b></td>
                        <td id="k14"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade " tabindex="-1" role="dialog" id="edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo "/data/edit" ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body body-conten">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Pengurus</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK Pengurus">
                        <input type="hidden" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No KKS</label>
                        <input type="text" name="no_kks" class="form-control" id="no_kks" placeholder="Masukkan No KKS">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis</label>
                        <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukkan Jenis">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rekening</label>
                        <input type="text" name="rek" class="form-control" id="rek" placeholder="Masukkan Rekening">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">BPNT NO KKS</label>
                        <input type="text" name="bpnt_nokks" class="form-control" id="bpnt_nokks" placeholder="Masukkan BPNT NO KKS">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">K1</label><b> Jawaban Awal ialah: </b><span id="jk1"></span>
                        <select name="k1" id="k1" class="form-control">
                            <option value="Lebih">Lebih</option>
                            <option value="Kurang">Kurang</option>
                        </select>
                        <small id="" class="form-text text-muted">Luas Lantai Bangunan Tempat Tinggal Kurang dari 8 M2 per Orang.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K2</label><b> Jawaban Awal ialah: </b><span id="jk2"></span>
                        <select name="k2" id="k2" class="form-control">
                            <option value="Kayu Murahan">Kayu Murahan</option>
                            <option value="Semen">Semen</option>
                        </select>
                        <small id="" class="form-text text-muted">Jenis Lantai Tempat Tinggal Terbuat Dari Tanah/Bambu/Kayu Murahan.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K3</label><b> Jawaban Awal ialah: </b><span id="jk3"></span>
                        <select name="k3" id="k3" class="form-control">
                            <option value="Kayu Berkualitas Rendah">Kayu Berkualitas Rendah</option>
                            <option value="Tembok Tanpa Diplaster">Tembok Tanpa Diplaster</option>
                            <option value="Tembok diPlaster">Tembok diPlaster</option>
                        </select>
                        <small id="" class="form-text text-muted">Jenis Dinding Tempat Tinggal Dari Bambu/Rumbia/Kayu Berkualitas Rendah/Tembok Tanpa Diplester.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K4</label><b> Jawaban Awal ialah: </b><span id="jk4"></span>
                        <select name="k4" id="k4" class="form-control">
                            <option value="Memiliki Fasilitas BAB">Memiliki Fasilitas BAB</option>
                            <option value="Tidak Memiliki">Tidak Memiliki</option>
                        </select>
                        <small id="" class="form-text text-muted">Tidak Memiliki Fasilitas Buang Air Besar/Bersama-sama dengan Rumah Tangga Lain.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K5</label><b> Jawaban Awal ialah: </b><span id="jk5"></span>
                        <select name="k5" id="k5" class="form-control">
                            <option value="Menggunakan Listrik">Menggunakan Listrik</option>
                            <option value="Tidak Menggunakan Listrik">Tidak Menggunakan Listrik</option>
                        </select>
                        <small id="" class="form-text text-muted">Sumber Penerangan Rumah Tangga Tidak Menggunakan Listrik.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K6</label><b> Jawaban Awal ialah: </b><span id="jk6"></span>
                        <select name="k6" id="k6" class="form-control">
                            <option value="Sumur">Sumur</option>
                            <option value="Sungai">Sungai</option>
                        </select>
                        <small id="" class="form-text text-muted">Sumber Air Minum Berasal Dari Sumur/Mata Air Tidak Terlindung/Sungai/Air Hujan.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K7</label><b> Jawaban Awal ialah: </b><span id="jk7"></span>
                        <select name="k7" id="k7" class="form-control">
                            <option value="Kayu Bakar">Kayu Bakar</option>
                            <option value="Gas LPG">Gas LPG</option>
                        </select>
                        <small id="" class="form-text text-muted">Bahan Bakar untuk Memasak Sehari-Hari adalah Kayu Bakar/Arang/Minyak Tanah.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K8</label><b> Jawaban Awal ialah: </b><span id="jk8"></span>
                        <select name="k8" id="k8" class="form-control">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <small id="" class="form-text text-muted">Hanya Mengkonsumsi Daging/Susu/Ayam dalam Satu Kali Seminggu.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K9</label><b> Jawaban Awal ialah: </b><span id="jk9"></span>
                        <select name="k9" id="k9" class="form-control">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <small id="" class="form-text text-muted">Hanya Membeli Satu Stel Pakaian Baru dalam Setahun.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">k10</label><b> Jawaban Awal ialah: </b><span id="jk10"></span>
                        <select name="k10" id="k10" class="form-control">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <small id="" class="form-text text-muted">Hanya Sanggup Makan Sebanyak Satu/Dua kali Dalam sehari.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K11</label><b> Jawaban Awal ialah: </b><span id="jk11"></span>
                        <select name="k11" id="k11" class="form-control">
                            <option value="Sanggup">Sanggup</option>
                            <option value="Tidak Sanggup">Tidak Sanggup</option>
                        </select>
                        <small id="" class="form-text text-muted">Tidak Sanggup Membayar Biaya Pengobatan DiPuskesmas/Poliklinik.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K12</label><b> Jawaban Awal ialah: </b><span id="jk12"></span>
                        <select name="k12" id="k12" class="form-control">
                            <option value="Petani">Petani</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                        </select>
                        <small id="" class="form-text text-muted">Sumber Penghasilan Kepala Rumah Tangga Adalah : Petani dengan Luas Lahan 500M2, Buruh Tani, Nelayan, Buruh Bangunan, Buruh Perkebunan dan atau Pekerjaan Lainnya dengan Pendapatan Dibawah Rp. 600.000,- per bulan.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K13</label>
                        <select name="k13" id="k13" class="form-control"><b> Jawaban Awal ialah: </b><span id="jk13"></span>
                            <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                            <option value="Tamat SD">Tamat SD</option>
                            <option value="Tamat SMA">Tamat SMA</option>
                        </select>
                        <small id="" class="form-text text-muted">Pendidikan Tertinggi Kepala Rumah Tangga: Tidak Sekolah/Tidak Tamat SD/Tamat SD.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">K14</label><b> Jawaban Awal ialah: </b><span id="jk14"></span>
                        <select name="k14" id="k14" class="form-control">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <small id="" class="form-text text-muted">Tidak Memiliki Tabungan/Barang atau aset yang mudah dijual dengan minimal sebesar Rp. 500.000,- Seperti sepeda motor yang belum lunas atau kredit/tidak kredit, emas, ternak, kapal motor, atau barang modal lainnya.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>