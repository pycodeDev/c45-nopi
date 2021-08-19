<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->include('Layout/Header'); ?>
    <?php echo $this->include('Layout/Css'); ?>
</head>

<style>
    div.scrollmenu {
    background-color: #fff;
    overflow: auto;
    white-space: nowrap;
  }

  div.scrollmenu a {
    margin-top: 10px;
    border-right: 1px solid #6c757d;
    display: inline-block;
    color: #000;
    pointer-events: none;
    text-align: center;
    padding: 4px;
    text-decoration: none;
  }

  div.scrollmenu a:hover {
    background-color: #777;
  }
</style>


<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php echo $this->include('Layout/Navbar'); ?>
        <div class="content-wrapper">
            <?= $this->renderSection('content') ?>
        </div>
        <?php echo $this->include('Layout/Footer'); ?>
    </div>
    <?php echo $this->include('Layout/Modal'); ?>
    <?php echo $this->include('Layout/Js'); ?>

    <script>
        $(document).ready( function () {
            $('#data').DataTable();
            $("#petunjuk").modal("show");

            var toggler = document.getElementsByClassName("caret");
            var i;

            for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
            }

            $("#cek").click(function() {
                $('#cek').attr('disabled', true);
                $('#load_btn_gif').show();
                $('#load_btn_text').show();
                $('#load_body_text2').show();
                $('#load_body_gif').show();
                $('#load_body_text1').hide();
                $('#rekom').hide();
                var k1 = document.getElementById('k1').value
                var k2 = document.getElementById('k2').value
                var k3 = document.getElementById('k3').value
                var k4 = document.getElementById('k4').value
                var k5 = document.getElementById('k5').value
                var k6 = document.getElementById('k6').value
                var k7 = document.getElementById('k7').value
                var k8 = document.getElementById('k8').value
                var k9 = document.getElementById('k9').value
                var k10 = document.getElementById('k10').value
                var k11 = document.getElementById('k11').value
                var k12 = document.getElementById('k12').value
                var k13 = document.getElementById('k13').value
                var k14 = document.getElementById('k14').value
                var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
                var csrfHash = $('.txt_csrfname').val(); // CSRF hash

                // console.log(jk +'-'+umur+'-'+job+'-'+stats);
                cek(k1, k2, k3, k4, k5, k6, k7, k8, k9, k10, k11, k12, k13, k14,  csrfName, csrfHash);
                
            });
        });

        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            <?php
            if (isset($_SESSION['flash'])) {?>
                Toast.fire({
                    icon: '<?php echo $_SESSION['sign'] ?>',
                    title: '<?php echo $_SESSION['msg'] ?>'
                })
            <?php
                unset($_SESSION['flash']);
                unset($_SESSION['sign']);
                unset($_SESSION['msg']);
            }
            ?>
        });

        function get_data(id){
            var id = id;
            $.ajax({
                url: "/det_atr",
                method: "POST",
                data: {
                    id: id
                    // [csrfName]: csrfHash
                },
                dataType: 'json',
                success: function(data) {
                    var l = Object.keys(data[0]).length
                    for (let index = 1; index <= l; index++) {
                        var a = "k"+index ; 
                        $("#"+a).html(data[0][a]);
                        // console.log(data[0][a]);
                    }
                    // $(".modal-body").html(tes);
                    $("#det-atr").modal("show");
                },
                error: function() {
                    Toast.fire({
                        icon: 'Error',
                        title: 'Silahkan refresh halaman Ini'
                    });
                }
            });
        }
        
        function edit(id){
            var id = id;
            $.ajax({
                url: "/edit",
                method: "POST",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(data) {
                   console.log(data);
                   document.getElementById("nik").value = data[0].nik;
                   document.getElementById("id").value = data[0].id;
                   document.getElementById("nama").value = data[0].nama;
                   document.getElementById("alamat").value = data[0].alamat;
                   document.getElementById("no_kks").value = data[0].no_kks;
                   document.getElementById("jenis").value = data[0].jenis;
                   document.getElementById("rek").value = data[0].rek;
                   document.getElementById("bpnt_nokks").value = data[0].bpnt_nokks;
                   for (let index = 1; index <= 14; index++) {
                    var a = "k"+index ; 
                    $("#jk"+index).html(data[0][a]);
                   }
                   $("#edit").modal("show");
                },
                error: function() {
                    Toast.fire({
                        icon: 'Error',
                        title: 'Silahkan refresh halaman Ini'
                    });
                }
            });
        }

        function cek(k1, k2, k3, k4, k5, k6, k7, k8, k9, k10, k11, k12, k13, k14, csrfName, csrfHash) {
            // console.log(k1+"-"+k2+"-"+k3+"-"+k4+"-"+k5+"-"+k6+"-"+k7+"-"+k8+"-"+k9+"-"+k10+"-"+k11+"-"+k12+"-"+k13+"-"+k14);
            $.ajax({
                url: "/tes",
                method: "POST",
                data: {
                    [csrfName]: csrfHash,
                    "k1": k1,
                    "k2": k2,
                    "k3": k3,
                    "k4": k4,
                    "k5": k5,
                    "k6": k6,
                    "k7": k7,
                    "k8": k8,
                    "k9": k9,
                    "k10": k10,
                    "k11": k11,
                    "k12": k12,
                    "k13": k13,
                    "k14": k14,
                },
                dataType: 'json',
                success: function(data) {
                    $('#cek').attr('disabled', false);
                    $('#load_btn_gif').hide();
                    $('#load_btn_text').hide();
                    $('#load_body_gif').hide();
                    $('#load_body_text2').hide();
                    $('#rekom').show();
                    console.log(data);

                    if (k2 == "kayu_murahan") {
                        k2 = "Kayu Murahan";
                    }else if (k3 == "kayu_berkualitas_rendah"){
                        k3 = "Kayu Berkualitas Rendah";
                    }else if (k3 == "tembok_tanpa_diplester"){
                        k3 = "Tembok Tanpa Diplaster";
                    }else if (k3 == "tembok_diplester"){
                        k3 = "Tembok Diplaster";
                    }else if (k4 == "memiliki_fasilitas_bab"){
                        k4 = "Memiliki Fasilitas BAB";
                    }else if (k4 == "tidak_memiliki"){
                        k4 = "Tidak Memiliki";
                    }else if (k5 == "menggunakan_listrik"){
                        k5 = "Menggunakan Listrik";
                    }else if (k5 == "tidak_menggunakan_listrik"){
                        k5 = "Tidak Menggunakan Listrik";
                    }else if (k7 == "kayu_bakar"){
                        k7 = "Kayu Bakar";
                    }else if (k7 == "gas_lpg"){
                        k7 = "Gas LPG";
                    }else if (k11 == "tidak_sanggup"){
                        k11 = "Tidak Sanggup";
                    }else if (k12 == "karwayan_swasta"){
                        k12 = "Karyawan Swasta";
                    }else if (k13 == "tidak_tamat_sd"){
                        k13 = "Tidak Tamat SD";
                    }else if (k13 == "tamat_sd"){
                        k13 = "Tamat SD";
                    }else if (k13 == "tamat_sma"){
                        k13 = "Tamat SMA";
                    }

                    if (data.hasil_rekom == "<b>Tidak Menjadi Rekomendasi Penerima Bantuan Pangan Non Tunai</b>") {
                        src = "/assets/dist/img/wrong.png";
                    }else{
                        src = "/assets/dist/img/aim.png";
                    }

                    $("#rekom").html('Data dengan: '+
                    '<div class="row">'+
                        '<div class="col-4">'+
                            '<ul id="myUL">'+
                                '<li><span class="caret"><b>K1</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k1+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K2</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k2+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K3</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k3+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K4</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k4+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K5</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k5+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K6</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k6+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K7</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k7+'</li>'+
                                    '</ul>'+
                                '</li>'+
                            '</ul>'+
                        '</div>'+
                        '<div class="col-4">'+
                            '<ul id="myUL">'+
                                '<li><span class="caret"><b>K8</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k8+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K9</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k9+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K10</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k10+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K11</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k11+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K12</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k12+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K13</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k13+'</li>'+
                                    '</ul>'+
                                '</li>'+
                                '<li><span class="caret"><b>K14</b></span>'+
                                    '<ul class="nested">'+
                                        '<li>'+k14+'</li>'+
                                    '</ul>'+
                                '</li>'+
                            '</ul>'+
                        '</div>'+
                        '<div class="col-4">'+
                            '<img src="'+src+'" style="margin-top:-10px;" width="100px"/>'+
                        '</div>'+
                    '</div>'+
                    '<br/> <p>Didapat Hasil yaitu : '+ data.hasil_rekom+ '</p>');
                    // var tree = $('');
                    // $("#rule").html();
                },
                error: function() {
                    $('#load_body_text1').html("Silahkan Refresh Dan Ulangi Kembali Proses Pencarian");
                    $('#cek').attr('disabled', false);
                    $('#load_btn_gif').hide();
                    $('#load_btn_text').hide();
                }
            });
        }

    </script>
    <script>
        
    </script>
</body>
</html>