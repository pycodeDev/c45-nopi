<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CrudModel;

class Cek extends BaseController
{

	public function __construct()
	{
		$this->crud = new CrudModel();

		$this->k1 = "kurang";
		$this->k2 = "kayu_murahan";
		$this->k4 = "tidak_memiliki";
		$this->k5 = "tidak_menggunakan_listrik";
		$this->k6 = "sungai";
		$this->k7 = "kayu_bakar";
		$this->k8 = "ya";
		$this->k9 = "ya";
		$this->k10 = "ya";
		$this->k11 = "tidak_sanggup";
		$this->k14 = "ya";

		$this->jk1 = 2;
		$this->jk2 = 2;
		$this->jk3 = 3;
		$this->jk4 = 2;
		$this->jk5 =2;
		$this->jk6 =2;
		$this->jk7 =2;
		$this->jk8 =2;
		$this->jk9 =2;
		$this->jk10 =2;
		$this->jk11 =2;
		$this->jk12 =3;
		$this->jk13 =3;
		$this->jk14 =2;
	}
	
	public function index()
	{
		$data['title'] = "Cek Penerima Bantuan";

		return view("Content/Cek", $data);
	}

	public function tes()
	{
		$data = $this->request->getPost();
		$hasil = $this->crud->persiapan();

		$pjg = count($hasil);
		$i = 1;
		$c=[];
		$hasil1['tidak_layak'] =[];
		$hasil1['layak'] =[];
		$hasil1['hasil_rekom'] = [];
		$hasil1['atribut'] = [];

		foreach ($hasil as $key => $value) {
			$atr = "hasil ke$i";
			$node = "node$i";
			$atr1 = $hasil[$atr][$node]['atribut'];
			array_push($c, $hasil[$atr][$node]['atribut']);
			// foreach ($hasil[$atr][$node] as $key => $value) {
			$ttp = count($hasil[$atr][$node]['layak']);
			$tdk = count($hasil[$atr][$node]['tidak_layak']);
			if ($tdk < 2) {
				$str = $hasil[$atr][$node]['tidak_layak'][0];
				// echo json_encode($hasil1);exit;
				array_push($hasil1['tidak_layak'], "<b>Jika</b> $atr1 <i>$str</i> <b>Maka</b> dia <b><i>Tidak Layak untuk Mendapatkan Bantuan Pangan Non Tunai</i></b>");
			}else {
				$a = 1;
				$aaa=array();
				foreach ($hasil[$atr][$node]['tidak_layak'] as $key => $value) {
					// $str = $hasil[$atr][$node]['tdk_tetap'];
					if ($a == 1) {
						array_push($aaa, "<b>Jika</b> $atr1 terdiri dari <i>$value</i> ,");
					}elseif ($a > 1 and $a < $tdk) {
						array_push($aaa, "<i>$value</i> ,");
					} else {
						array_push($aaa, "<i>$value</i> <b>Maka</b> dia <b><i>Tidak Layak untuk Mendapatkan Bantuan Pangan Non Tunai</i></b>");
					} 
					$a++;
				}
				$b = implode("", $aaa);
				array_push($hasil1['tidak_layak'], $b);
			}

			if ($ttp == 0) {
				$str = $this->$atr1;
				array_push($hasil1['layak'], "<b>Jika</b> $atr1 <i>$str</i> <b>Maka</b> dia <b><i>Layak untuk Mendapatkan Bantuan Pangan Non Tunai</i></b>");
			}elseif ($ttp < 2) {
				$str = $hasil[$atr][$node]['layak'][0];
				array_push($hasil1['layak'], "<b>Jika</b> $atr1 <i>$str</i> <b>Maka</b> dia <b><i>Layak untuk Mendapatkan Bantuan Pangan Non Tunai</i></b>");
			}else {
				$a = 1;
				$aaa = array();
				foreach ($hasil[$atr][$node]['layak'] as $key => $value) {
					if ($a == 1) {
						array_push($aaa, "<b>Jika</b> rentang $atr1 terdiri dari <i>$value</i> ,");
					}elseif ($a > 1 and $a < $ttp) {
						array_push($aaa, "<i>$value</i> ,");
					} else {
						array_push($aaa, "<i>$value</i> <b>Maka</b> dia <b><i>Layak untuk Mendapatkan Bantuan Pangan Non Tunai</i></b>");
					} 
					$a++;
				}
				$b = implode("", $aaa);
				array_push($hasil1['layak'], $b);
			}
			
			// }

			$i++;
		}

		$ii = 1;
		foreach ($c as $key) {
			$atr = "hasil ke$ii";
			$node = "node$ii";
			$cc = "jk$ii";
			
			if ($this->$cc == count($hasil[$atr][$node]['tidak_layak'])) {
				foreach ($hasil[$atr][$node]['tidak_layak'] as $key1) {
					if ($data[$key] == $key1 and $data[$key] != $this->$key ) {
						array_push($hasil1['hasil_rekom'], "<b>Tidak Menjadi Rekomendasi Penerima Bantuan Pangan Non Tunai</b>");
	
						if ($data[$key] == "kayu_murahan") {
							$hhh = "Kayu Murahan";
						}elseif ($data[$key] == "kayu_berkualitas_rendah") {
							$hhh = "Kayu Berkualitas Rendah";
						}elseif ($data[$key] == "tembok_tanpa_diplester") {
							$hhh = "Tembok Tanpa Plaster";
						}elseif ($data[$key] == "tembok_diplester") {
							$hhh = "Tembok Diplester";
						}elseif ($data[$key] == "memiliki_fasilitas_bab") {
							$hhh = "Memiliki Fasilitas BAB";
						}elseif ($data[$key] == "tidak_memili") {
							$hhh = "Tidak Memiliki";
						}elseif ($data[$key] == "tidak_menggunakan_listrik") {
							$hhh = "Tidak Menggunakan Listrik";
						}elseif ($data[$key] == "menggunakan_listrik") {
							$hhh = "Menggunakan Listrik";
						}elseif ($data[$key] == "kayu_bakar") {
							$hhh = "Kayu Bakar";
						}elseif ($data[$key] == "gas_lpg") {
							$hhh = "Gas LPG";
						}elseif ($data[$key] == "tidak_sanggup") {
							$hhh = "Tidak Sanggup";
						}elseif ($data[$key] == "karyawan_swasta") {
							$hhh = "Karyawan Swasta";
						}elseif ($data[$key] == "tidak_tamat_sd") {
							$hhh = "Tidak Tamat SD";
						}elseif ($data[$key] == "tamat_sd") {
							$hhh = "Tamat SD";
						}elseif ($data[$key] == "tamat_sma") {
							$hhh = "Tamat SMA";
						}else {
							$hhh = $key1;
						}
	
						array_push($hasil1['atribut'], mb_convert_case($hhh, MB_CASE_TITLE, "UTF-8"));
						break;
					}
				}
			}else {
				foreach ($hasil[$atr][$node]['tidak_layak'] as $key1) {
					if ($data[$key] == $key1 ) {
						array_push($hasil1['hasil_rekom'], "<b>Tidak Menjadi Rekomendasi Penerima Bantuan Pangan Non Tunai</b>");
	
						if ($data[$key] == "kayu_murahan") {
							$hhh = "Kayu Murahan";
						}elseif ($data[$key] == "kayu_berkualitas_rendah") {
							$hhh = "Kayu Berkualitas Rendah";
						}elseif ($data[$key] == "tembok_tanpa_diplester") {
							$hhh = "Tembok Tanpa Plaster";
						}elseif ($data[$key] == "tembok_diplester") {
							$hhh = "Tembok Diplester";
						}elseif ($data[$key] == "memiliki_fasilitas_bab") {
							$hhh = "Memiliki Fasilitas BAB";
						}elseif ($data[$key] == "tidak_memili") {
							$hhh = "Tidak Memiliki";
						}elseif ($data[$key] == "tidak_menggunakan_listrik") {
							$hhh = "Tidak Menggunakan Listrik";
						}elseif ($data[$key] == "menggunakan_listrik") {
							$hhh = "Menggunakan Listrik";
						}elseif ($data[$key] == "kayu_bakar") {
							$hhh = "Kayu Bakar";
						}elseif ($data[$key] == "gas_lpg") {
							$hhh = "Gas LPG";
						}elseif ($data[$key] == "tidak_sanggup") {
							$hhh = "Tidak Sanggup";
						}elseif ($data[$key] == "karyawan_swasta") {
							$hhh = "Karyawan Swasta";
						}elseif ($data[$key] == "tidak_tamat_sd") {
							$hhh = "Tidak Tamat SD";
						}elseif ($data[$key] == "tamat_sd") {
							$hhh = "Tamat SD";
						}elseif ($data[$key] == "tamat_sma") {
							$hhh = "Tamat SMA";
						}else {
							$hhh = $key1;
						}
	
						array_push($hasil1['atribut'], mb_convert_case($hhh, MB_CASE_TITLE, "UTF-8"));
						break;
					}
				}
			}
			$ii++;
		}
		if (count($hasil1['hasil_rekom']) == 0) {
			array_push($hasil1['hasil_rekom'], "<b>Menjadi Rekomendasi Sebagai Penerima Bantuan Pangan Non Tunai</b>");
		}

		$data = array(
			"k1" => $data['k1'],
			"k2" => $data['k2'],
			"k3" => $data['k3'],
			"k4" => $data['k4'],
			"k5" => $data['k5'],
			"k6" => $data['k6'],
			"k7" => $data['k7'],
			"k8" => $data['k8'],
			"k9" => $data['k9'],
			"k10" => $data['k10'],
			"k11" => $data['k11'],
			"k12" => $data['k12'],
			"k13" => $data['k13'],
			"k14" => $data['k14'],
			"rekomendasi" => $hasil1['hasil_rekom'][0],
		);
		
		$this->crud->save_data("tb_hasil", $data);

		echo json_encode($hasil1);
	}
}
