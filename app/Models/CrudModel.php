<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
	public function save_data($table, $data)
	{
		return $this->db->table($table)->insert($data);
	}

	public function read_all_data($table)
	{
		return $this->db->table($table)->get()->getResultArray();
	}

	public function select_1_cond($table, $param = "id", $id = 1)
	{
		return $this->db->table($table)->where([$param => $id])->get()->getResultArray();
	}

	public function solo_query($query)
	{
		return $this->db->query($query)->getResultArray();
	}

	public function update_data_input($table, $data, $param, $id)
	{
		return $this->db->table($table)->update($data, [$param => $id]);
	}

	public function delete_truncate($table)
	{
		return $this->db->table($table)->truncate();
	}

	public function persiapan()
	{
		$a = true;
		$node = 1;
		$hasil_hilang = array();
		$atr_ilang = array();

		$debug = array();

		while ($node < 3) {
			$out = array();
			$data = array(
				"total" => 0,
				"tot_layak" => 0,
				"tot_tdk_layak" => 0,
				"total_data" => array(
					"k1" => array(
						"lebih" => 0,
						"kurang" => 0
					),
					"k2" => array(
						"kayu_murahan" => 0,
						"semen" => 0
					),
					"k3" => array(
						"kayu_berkualitas_rendah" => 0,
						"tembok_tanpa_diplester" => 0,
						"tembok_diplester" => 0
					),
					"k4" => array(
						"memiliki_fasilitas_bab" => 0,
						"tidak_memiliki" => 0
					),
					"k5" => array(
						"menggunakan_listrik" => 0,
						"tidak_menggunakan_listrik" => 0
					),
					"k6" => array(
						"sumur" => 0,
						"sungai" => 0
					),
					"k7" => array(
						"kayu_bakar" => 0,
						"gas_lpg" => 0
					),
					"k8" => array(
						"ya" => 0,
						"tidak" => 0
					),
					"k9" => array(
						"ya" => 0,
						"tidak" => 0
					), 
					"k10" => array(
						"ya" => 0,
						"tidak" => 0
					),
					"k11" => array(
						"sanggup" => 0,
						"tidak_sanggup" => 0
					),
					"k12" => array(
						"petani" => 0,
						"pedagang" => 0,
						"karyawan_swasta" => 0
					),
					"k13" => array(
						"tidak_tamat_sd" => 0,
						"tamat_sd" => 0,
						"tamat_sma" => 0
					),
					"k14" => array(
						"ya" => 0,
						"tidak" => 0
					)
				),
				"layak" => array(
					"k1" => array(
						"lebih" => 0,
						"kurang" => 0
					),
					"k2" => array(
						"kayu_murahan" => 0,
						"semen" => 0
					),
					"k3" => array(
						"kayu_berkualitas_rendah" => 0,
						"tembok_tanpa_diplester" => 0,
						"tembok_diplester" => 0
					),
					"k4" => array(
						"memiliki_fasilitas_bab" => 0,
						"tidak_memiliki" => 0
					),
					"k5" => array(
						"menggunakan_listrik" => 0,
						"tidak_menggunakan_listrik" => 0
					),
					"k6" => array(
						"sumur" => 0,
						"sungai" => 0
					),
					"k7" => array(
						"kayu_bakar" => 0,
						"gas_lpg" => 0
					),
					"k8" => array(
						"ya" => 0,
						"tidak" => 0
					),
					"k9" => array(
						"ya" => 0,
						"tidak" => 0
					), 
					"k10" => array(
						"ya" => 0,
						"tidak" => 0
					),
					"k11" => array(
						"sanggup" => 0,
						"tidak_sanggup" => 0
					),
					"k12" => array(
						"petani" => 0,
						"pedagang" => 0,
						"karyawan_swasta" => 0
					),
					"k13" => array(
						"tidak_tamat_sd" => 0,
						"tamat_sd" => 0,
						"tamat_sma" => 0
					),
					"k14" => array(
						"ya" => 0,
						"tidak" => 0
					)
				),
				"tidak_layak" => array(
					"k1" => array(
						"lebih" => 0,
						"kurang" => 0
					),
					"k2" => array(
						"kayu_murahan" => 0,
						"semen" => 0
					),
					"k3" => array(
						"kayu_berkualitas_rendah" => 0,
						"tembok_tanpa_diplester" => 0,
						"tembok_diplester" => 0
					),
					"k4" => array(
						"memiliki_fasilitas_bab" => 0,
						"tidak_memiliki" => 0
					),
					"k5" => array(
						"menggunakan_listrik" => 0,
						"tidak_menggunakan_listrik" => 0
					),
					"k6" => array(
						"sumur" => 0,
						"sungai" => 0
					),
					"k7" => array(
						"kayu_bakar" => 0,
						"gas_lpg" => 0
					),
					"k8" => array(
						"ya" => 0,
						"tidak" => 0
					),
					"k9" => array(
						"ya" => 0,
						"tidak" => 0
					), 
					"k10" => array(
						"ya" => 0,
						"tidak" => 0
					),
					"k11" => array(
						"sanggup" => 0,
						"tidak_sanggup" => 0
					),
					"k12" => array(
						"petani" => 0,
						"pedagang" => 0,
						"karyawan_swasta" => 0
					),
					"k13" => array(
						"tidak_tamat_sd" => 0,
						"tamat_sd" => 0,
						"tamat_sma" => 0
					),
					"k14" => array(
						"ya" => 0,
						"tidak" => 0
					)
				)

			);

			if ($node == 1) {
				$train = $this->read_all_data("tb_data");
				$layak = $this->select_1_cond("tb_data", "rekomendasi", "Layak");
				$tidak_layak = $this->select_1_cond("tb_data", "rekomendasi", "Tidak Layak");
			}else {
				$where = implode(" and ", $hasil_hilang);
				$train = $this->solo_query("select * from tb_data where $where");
				$layak = $this->solo_query("select * from tb_data where rekomendasi='Layak' and ($where)");
				$tidak_layak = $this->solo_query("select * from tb_data where rekomendasi='Tidak Layak' and ($where)");
			}

			$data['total'] = count($train);
			$data['tot_layak'] = count($layak);
			$data['tot_tdk_layak'] = count($tidak_layak);

			foreach ($train as $val) {
				$k1t = count($data['total_data']['k1']) - count(array_intersect(array_keys($data['total_data']['k1']), $atr_ilang));
				if ($k1t >= 2) {
					if ($val['k1'] == "Lebih") {
						$data['total_data']['k1']['lebih'] = $data['total_data']['k1']['lebih'] + 1;
					}elseif ($val['k1'] == "Kurang") {
						$data['total_data']['k1']['kurang'] = $data['total_data']['k1']['kurang'] + 1;
					}
				}

				$k2t = count($data['total_data']['k2']) - count(array_intersect(array_keys($data['total_data']['k2']), $atr_ilang));
				if ($k2t >=  2) {
					if ($val['k2'] == "Kayu Murahan") {
						$data['total_data']['k2']['kayu_murahan'] = $data['total_data']['k2']['kayu_murahan'] + 1;
					}elseif ($val['k2'] == "Semen") {
						$data['total_data']['k2']['semen'] = $data['total_data']['k2']['semen'] + 1;
					}
				}
				
				$k3t = count($data['total_data']['k3']) - count(array_intersect(array_keys($data['total_data']['k3']), $atr_ilang));
				if ($k3t >=  2) {
					if ($val['k3'] == "Kayu Berkualitas Rendah") {
						$data['total_data']['k3']['kayu_berkualitas_rendah'] = $data['total_data']['k3']['kayu_berkualitas_rendah'] + 1;
					}elseif ($val['k3'] == "Tembok Tanpa Plester") {
						$data['total_data']['k3']['tembok_tanpa_diplester'] = $data['total_data']['k3']['tembok_tanpa_diplester'] + 1;
					}elseif ($val['k3'] == "Tembok di Plester") {
						$data['total_data']['k3']['tembok_diplester'] = $data['total_data']['k3']['tembok_diplester'] + 1;
					}
				}

				$k4t = count($data['total_data']['k4']) - count(array_intersect(array_keys($data['total_data']['k4']), $atr_ilang));
				if ($k4t >=  2) {
					if ($val['k4'] == "Memiliki Fasilitas BAB") {
						$data['total_data']['k4']['memiliki_fasilitas_bab'] = $data['total_data']['k4']['memiliki_fasilitas_bab'] + 1;
					}elseif ($val['k4'] == "Tidak Memiliki") {
						$data['total_data']['k4']['tidak_memiliki'] = $data['total_data']['k4']['tidak_memiliki'] + 1;
					}
				}

				$k5t = count($data['total_data']['k5']) - count(array_intersect(array_keys($data['total_data']['k5']), $atr_ilang));
				if ($k5t >=  2) {
					if ($val['k5'] == "Menggunakan Listrik") {
						$data['total_data']['k5']['menggunakan_listrik'] = $data['total_data']['k5']['menggunakan_listrik'] + 1;
					}elseif ($val['k5'] == "Tidak Menggunakan Listrik") {
						$data['total_data']['k5']['tidak_menggunakan_listrik'] = $data['total_data']['k5']['tidak_menggunakan_listrik'] + 1;
					}
				}

				$k6t = count($data['total_data']['k6']) - count(array_intersect(array_keys($data['total_data']['k6']), $atr_ilang));
				if ($k6t >=  2) {
					if ($val['k6'] == "Sumur") {
						$data['total_data']['k6']['sumur'] = $data['total_data']['k6']['sumur'] + 1;
					}elseif ($val['k6'] == "Sungai") {
						$data['total_data']['k6']['sungai'] = $data['total_data']['k6']['sungai'] + 1;
					}
				}

				$k7t = count($data['total_data']['k7']) - count(array_intersect(array_keys($data['total_data']['k7']), $atr_ilang));
				if ($k7t >=  2) {
					if ($val['k7'] == "Kayu Bakar") {
						$data['total_data']['k7']['kayu_bakar'] = $data['total_data']['k7']['kayu_bakar'] + 1;
					}elseif ($val['k7'] == "Gas LPG") {
						$data['total_data']['k7']['gas_lpg'] = $data['total_data']['k7']['gas_lpg'] + 1;
					}
				}

				$k8t = count($data['total_data']['k8']) - count(array_intersect(array_keys($data['total_data']['k8']), $atr_ilang));
				if ($k8t >=  2) {
					if ($val['k8'] == "Ya") {
						$data['total_data']['k8']['ya'] = $data['total_data']['k8']['ya'] + 1;
					}elseif ($val['k8'] == "Tidak") {
						$data['total_data']['k8']['tidak'] = $data['total_data']['k8']['tidak'] + 1;
					}
				}

				$k9t = count($data['total_data']['k9']) - count(array_intersect(array_keys($data['total_data']['k9']), $atr_ilang));
				if ($k9t >=  2) {
					if ($val['k9'] == "Ya") {
						$data['total_data']['k9']['ya'] = $data['total_data']['k9']['ya'] + 1;
					}elseif ($val['k9'] == "Tidak") {
						$data['total_data']['k9']['tidak'] = $data['total_data']['k9']['tidak'] + 1;
					}
				}

				$k10t = count($data['total_data']['k10']) - count(array_intersect(array_keys($data['total_data']['k10']), $atr_ilang));
				if ($k10t >=  2) {
					if ($val['k10'] == "Ya") {
						$data['total_data']['k10']['ya'] = $data['total_data']['k10']['ya'] + 1;
					}elseif ($val['k10'] == "Tidak") {
						$data['total_data']['k10']['tidak'] = $data['total_data']['k10']['tidak'] + 1;
					}
				}

				$k11t = count($data['total_data']['k11']) - count(array_intersect(array_keys($data['total_data']['k11']), $atr_ilang));
				if ($k11t >=  2) {
					if ($val['k11'] == "Sanggup") {
						$data['total_data']['k11']['sanggup'] = $data['total_data']['k11']['sanggup'] + 1;
					}elseif ($val['k11'] == "Tidak Sanggup") {
						$data['total_data']['k11']['tidak_sanggup'] = $data['total_data']['k11']['tidak_sanggup'] + 1;
					}
				}

				$k12t = count($data['total_data']['k12']) - count(array_intersect(array_keys($data['total_data']['k12']), $atr_ilang));
				if ($k12t >=  2) {
					if ($val['k12'] == "Petani") {
						$data['total_data']['k12']['petani'] = $data['total_data']['k12']['petani'] + 1;
					}elseif ($val['k12'] == "Pedagang") {
						$data['total_data']['k12']['pedagang'] = $data['total_data']['k12']['pedagang'] + 1;
					}elseif ($val['k12'] == "Karyawan Swasta") {
						$data['total_data']['k12']['karyawan_swasta'] = $data['total_data']['k12']['karyawan_swasta'] + 1;
					}
				}

				$k13t = count($data['total_data']['k13']) - count(array_intersect(array_keys($data['total_data']['k13']), $atr_ilang));
				if ($k13t >=  2) {
					if ($val['k13'] == "Tidak Tamat SD") {
						$data['total_data']['k13']['tidak_tamat_sd'] = $data['total_data']['k13']['tidak_tamat_sd'] + 1;
					}elseif ($val['k13'] == "Tamat SD") {
						$data['total_data']['k13']['tamat_sd'] = $data['total_data']['k13']['tamat_sd'] + 1;
					}elseif ($val['k13'] == "Tamat SMA") {
						$data['total_data']['k13']['tamat_sma'] = $data['total_data']['k13']['tamat_sma'] + 1;
					}
				}

				$k14t = count($data['total_data']['k14']) - count(array_intersect(array_keys($data['total_data']['k14']), $atr_ilang));
				if ($k14t >=  2) {
					if ($val['k14'] == "Ya") {
						$data['total_data']['k14']['ya'] = $data['total_data']['k14']['ya'] + 1;
					}elseif ($val['k14'] == "Tidak") {
						$data['total_data']['k14']['tidak'] = $data['total_data']['k14']['tidak'] + 1;
					}
				}
			}

			foreach ($layak as $vall) {
				$k1t = count($data['layak']['k1']) - count(array_intersect(array_keys($data['layak']['k1']), $atr_ilang));
				if ($k1t >= 2) {
					if ($vall['k1'] == "Lebih") {
						$data['layak']['k1']['lebih'] = $data['layak']['k1']['lebih'] + 1;
					}elseif ($vall['k1'] == "Kurang") {
						$data['layak']['k1']['kurang'] = $data['layak']['k1']['kurang'] + 1;
					}
				}

				$k2t = count($data['layak']['k2']) - count(array_intersect(array_keys($data['layak']['k2']), $atr_ilang));
				if ($k2t >=  2) {
					if ($vall['k2'] == "Kayu Murahan") {
						$data['layak']['k2']['kayu_murahan'] = $data['layak']['k2']['kayu_murahan'] + 1;
					}elseif ($vall['k2'] == "Semen") {
						$data['layak']['k2']['semen'] = $data['layak']['k2']['semen'] + 1;
					}
				}
				
				$k3t = count($data['layak']['k3']) - count(array_intersect(array_keys($data['layak']['k3']), $atr_ilang));
				if ($k3t >=  2) {
					if ($vall['k3'] == "Kayu Berkualitas Rendah") {
						$data['layak']['k3']['kayu_berkualitas_rendah'] = $data['layak']['k3']['kayu_berkualitas_rendah'] + 1;
					}elseif ($vall['k3'] == "Tembok Tanpa Plester") {
						$data['layak']['k3']['tembok_tanpa_diplester'] = $data['layak']['k3']['tembok_tanpa_diplester'] + 1;
					}elseif ($vall['k3'] == "Tembok di Plester") {
						$data['layak']['k3']['tembok_diplester'] = $data['layak']['k3']['tembok_diplester'] + 1;
					}
				}

				$k4t = count($data['layak']['k4']) - count(array_intersect(array_keys($data['layak']['k4']), $atr_ilang));
				if ($k4t >=  2) {
					if ($vall['k4'] == "Memiliki Fasilitas BAB") {
						$data['layak']['k4']['memiliki_fasilitas_bab'] = $data['layak']['k4']['memiliki_fasilitas_bab'] + 1;
					}elseif ($vall['k4'] == "Tidak Memiliki") {
						$data['layak']['k4']['tidak_memiliki'] = $data['layak']['k4']['tidak_memiliki'] + 1;
					}
				}

				$k5t = count($data['layak']['k5']) - count(array_intersect(array_keys($data['layak']['k5']), $atr_ilang));
				if ($k5t >=  2) {
					if ($vall['k5'] == "Menggunakan Listrik") {
						$data['layak']['k5']['menggunakan_listrik'] = $data['layak']['k5']['menggunakan_listrik'] + 1;
					}elseif ($vall['k5'] == "Tidak Menggunakan Listrik") {
						$data['layak']['k5']['tidak_menggunakan_listrik'] = $data['layak']['k5']['tidak_menggunakan_listrik'] + 1;
					}
				}

				$k6t = count($data['layak']['k6']) - count(array_intersect(array_keys($data['layak']['k6']), $atr_ilang));
				if ($k6t >=  2) {
					if ($vall['k6'] == "Sumur") {
						$data['layak']['k6']['sumur'] = $data['layak']['k6']['sumur'] + 1;
					}elseif ($vall['k6'] == "Sungai") {
						$data['layak']['k6']['sungai'] = $data['layak']['k6']['sungai'] + 1;
					}
				}

				$k7t = count($data['layak']['k7']) - count(array_intersect(array_keys($data['layak']['k7']), $atr_ilang));
				if ($k7t >=  2) {
					if ($vall['k7'] == "Kayu Bakar") {
						$data['layak']['k7']['kayu_bakar'] = $data['layak']['k7']['kayu_bakar'] + 1;
					}elseif ($vall['k7'] == "Gas LPG") {
						$data['layak']['k7']['gas_lpg'] = $data['layak']['k7']['gas_lpg'] + 1;
					}
				}

				$k8t = count($data['layak']['k8']) - count(array_intersect(array_keys($data['layak']['k8']), $atr_ilang));
				if ($k8t >=  2) {
					if ($vall['k8'] == "Ya") {
						$data['layak']['k8']['ya'] = $data['layak']['k8']['ya'] + 1;
					}elseif ($vall['k8'] == "Tidak") {
						$data['layak']['k8']['tidak'] = $data['layak']['k8']['tidak'] + 1;
					}
				}

				$k9t = count($data['layak']['k9']) - count(array_intersect(array_keys($data['layak']['k9']), $atr_ilang));
				if ($k9t >=  2) {
					if ($vall['k9'] == "Ya") {
						$data['layak']['k9']['ya'] = $data['layak']['k9']['ya'] + 1;
					}elseif ($vall['k9'] == "Tidak") {
						$data['layak']['k9']['tidak'] = $data['layak']['k9']['tidak'] + 1;
					}
				}

				$k10t = count($data['layak']['k10']) - count(array_intersect(array_keys($data['layak']['k10']), $atr_ilang));
				if ($k10t >=  2) {
					if ($vall['k10'] == "Ya") {
						$data['layak']['k10']['ya'] = $data['layak']['k10']['ya'] + 1;
					}elseif ($vall['k10'] == "Tidak") {
						$data['layak']['k10']['tidak'] = $data['layak']['k10']['tidak'] + 1;
					}
				}

				$k11t = count($data['layak']['k11']) - count(array_intersect(array_keys($data['layak']['k11']), $atr_ilang));
				if ($k11t >=  2) {
					if ($vall['k11'] == "Sanggup") {
						$data['layak']['k11']['sanggup'] = $data['layak']['k11']['sanggup'] + 1;
					}elseif ($vall['k11'] == "Tidak Sanggup") {
						$data['layak']['k11']['tidak_sanggup'] = $data['layak']['k11']['tidak_sanggup'] + 1;
					}
				}

				$k12t = count($data['layak']['k12']) - count(array_intersect(array_keys($data['layak']['k12']), $atr_ilang));
				if ($k12t >=  2) {
					if ($vall['k12'] == "Petani") {
						$data['layak']['k12']['petani'] = $data['layak']['k12']['petani'] + 1;
					}elseif ($vall['k12'] == "Pedagang") {
						$data['layak']['k12']['pedagang'] = $data['layak']['k12']['pedagang'] + 1;
					}elseif ($vall['k12'] == "Karyawan Swasta") {
						$data['layak']['k12']['karyawan_swasta'] = $data['layak']['k12']['karyawan_swasta'] + 1;
					}
				}

				$k13t = count($data['layak']['k13']) - count(array_intersect(array_keys($data['layak']['k13']), $atr_ilang));
				if ($k13t >=  2) {
					if ($vall['k13'] == "Tidak Tamat SD") {
						$data['layak']['k13']['tidak_tamat_sd'] = $data['layak']['k13']['tidak_tamat_sd'] + 1;
					}elseif ($vall['k13'] == "Tamat SD") {
						$data['layak']['k13']['tamat_sd'] = $data['layak']['k13']['tamat_sd'] + 1;
					}elseif ($vall['k13'] == "Tamat SMA") {
						$data['layak']['k13']['tamat_sma'] = $data['layak']['k13']['tamat_sma'] + 1;
					}
				}

				$k14t = count($data['layak']['k14']) - count(array_intersect(array_keys($data['layak']['k14']), $atr_ilang));
				if ($k14t >=  2) {
					if ($vall['k14'] == "Ya") {
						$data['layak']['k14']['ya'] = $data['layak']['k14']['ya'] + 1;
					}elseif ($vall['k14'] == "Tidak") {
						$data['layak']['k14']['tidak'] = $data['layak']['k14']['tidak'] + 1;
					}
				}
			}

			foreach ($tidak_layak as $valll) {
				$k1t = count($data['tidak_layak']['k1']) - count(array_intersect(array_keys($data['tidak_layak']['k1']), $atr_ilang));
				if ($k1t >= 2) {
					if ($valll['k1'] == "Lebih") {
						$data['tidak_layak']['k1']['lebih'] = $data['tidak_layak']['k1']['lebih'] + 1;
					}elseif ($valll['k1'] == "Kurang") {
						$data['tidak_layak']['k1']['kurang'] = $data['tidak_layak']['k1']['kurang'] + 1;
					}
				}

				$k2t = count($data['tidak_layak']['k2']) - count(array_intersect(array_keys($data['tidak_layak']['k2']), $atr_ilang));
				if ($k2t >=  2) {
					if ($valll['k2'] == "Kayu Murahan") {
						$data['tidak_layak']['k2']['kayu_murahan'] = $data['tidak_layak']['k2']['kayu_murahan'] + 1;
					}elseif ($valll['k2'] == "Semen") {
						$data['tidak_layak']['k2']['semen'] = $data['tidak_layak']['k2']['semen'] + 1;
					}
				}
				
				$k3t = count($data['tidak_layak']['k3']) - count(array_intersect(array_keys($data['tidak_layak']['k3']), $atr_ilang));
				if ($k3t >=  2) {
					if ($valll['k3'] == "Kayu Berkualitas Rendah") {
						$data['tidak_layak']['k3']['kayu_berkualitas_rendah'] = $data['tidak_layak']['k3']['kayu_berkualitas_rendah'] + 1;
					}elseif ($valll['k3'] == "Tembok Tanpa Plester") {
						$data['tidak_layak']['k3']['tembok_tanpa_diplester'] = $data['tidak_layak']['k3']['tembok_tanpa_diplester'] + 1;
					}elseif ($valll['k3'] == "Tembok di Plester") {
						$data['tidak_layak']['k3']['tembok_diplester'] = $data['tidak_layak']['k3']['tembok_diplester'] + 1;
					}
				}

				$k4t = count($data['tidak_layak']['k4']) - count(array_intersect(array_keys($data['tidak_layak']['k4']), $atr_ilang));
				if ($k4t >=  2) {
					if ($valll['k4'] == "Memiliki Fasilitas BAB") {
						$data['tidak_layak']['k4']['memiliki_fasilitas_bab'] = $data['tidak_layak']['k4']['memiliki_fasilitas_bab'] + 1;
					}elseif ($valll['k4'] == "Tidak Memiliki") {
						$data['tidak_layak']['k4']['tidak_memiliki'] = $data['tidak_layak']['k4']['tidak_memiliki'] + 1;
					}
				}

				$k5t = count($data['tidak_layak']['k5']) - count(array_intersect(array_keys($data['tidak_layak']['k5']), $atr_ilang));
				if ($k5t >=  2) {
					if ($valll['k5'] == "Menggunakan Listrik") {
						$data['tidak_layak']['k5']['menggunakan_listrik'] = $data['tidak_layak']['k5']['menggunakan_listrik'] + 1;
					}elseif ($valll['k5'] == "Tidak Menggunakan Listrik") {
						$data['tidak_layak']['k5']['tidak_menggunakan_listrik'] = $data['tidak_layak']['k5']['tidak_menggunakan_listrik'] + 1;
					}
				}

				$k6t = count($data['tidak_layak']['k6']) - count(array_intersect(array_keys($data['tidak_layak']['k6']), $atr_ilang));
				if ($k6t >=  2) {
					if ($valll['k6'] == "Sumur") {
						$data['tidak_layak']['k6']['sumur'] = $data['tidak_layak']['k6']['sumur'] + 1;
					}elseif ($valll['k6'] == "Sungai") {
						$data['tidak_layak']['k6']['sungai'] = $data['tidak_layak']['k6']['sungai'] + 1;
					}
				}

				$k7t = count($data['tidak_layak']['k7']) - count(array_intersect(array_keys($data['tidak_layak']['k7']), $atr_ilang));
				if ($k7t >=  2) {
					if ($valll['k7'] == "Kayu Bakar") {
						$data['tidak_layak']['k7']['kayu_bakar'] = $data['tidak_layak']['k7']['kayu_bakar'] + 1;
					}elseif ($valll['k7'] == "Gas LPG") {
						$data['tidak_layak']['k7']['gas_lpg'] = $data['tidak_layak']['k7']['gas_lpg'] + 1;
					}
				}

				$k8t = count($data['tidak_layak']['k8']) - count(array_intersect(array_keys($data['tidak_layak']['k8']), $atr_ilang));
				if ($k8t >=  2) {
					if ($valll['k8'] == "Ya") {
						$data['tidak_layak']['k8']['ya'] = $data['tidak_layak']['k8']['ya'] + 1;
					}elseif ($valll['k8'] == "Tidak") {
						$data['tidak_layak']['k8']['tidak'] = $data['tidak_layak']['k8']['tidak'] + 1;
					}
				}

				$k9t = count($data['tidak_layak']['k9']) - count(array_intersect(array_keys($data['tidak_layak']['k9']), $atr_ilang));
				if ($k9t >=  2) {
					if ($valll['k9'] == "Ya") {
						$data['tidak_layak']['k9']['ya'] = $data['tidak_layak']['k9']['ya'] + 1;
					}elseif ($valll['k9'] == "Tidak") {
						$data['tidak_layak']['k9']['tidak'] = $data['tidak_layak']['k9']['tidak'] + 1;
					}
				}

				$k10t = count($data['tidak_layak']['k10']) - count(array_intersect(array_keys($data['tidak_layak']['k10']), $atr_ilang));
				if ($k10t >=  2) {
					if ($valll['k10'] == "Ya") {
						$data['tidak_layak']['k10']['ya'] = $data['tidak_layak']['k10']['ya'] + 1;
					}elseif ($valll['k10'] == "Tidak") {
						$data['tidak_layak']['k10']['tidak'] = $data['tidak_layak']['k10']['tidak'] + 1;
					}
				}

				$k11t = count($data['tidak_layak']['k11']) - count(array_intersect(array_keys($data['tidak_layak']['k11']), $atr_ilang));
				if ($k11t >=  2) {
					if ($valll['k11'] == "Sanggup") {
						$data['tidak_layak']['k11']['sanggup'] = $data['tidak_layak']['k11']['sanggup'] + 1;
					}elseif ($valll['k11'] == "Tidak Sanggup") {
						$data['tidak_layak']['k11']['tidak_sanggup'] = $data['tidak_layak']['k11']['tidak_sanggup'] + 1;
					}
				}

				$k12t = count($data['tidak_layak']['k12']) - count(array_intersect(array_keys($data['tidak_layak']['k12']), $atr_ilang));
				if ($k12t >=  2) {
					if ($valll['k12'] == "Petani") {
						$data['tidak_layak']['k12']['petani'] = $data['tidak_layak']['k12']['petani'] + 1;
					}elseif ($valll['k12'] == "Pedagang") {
						$data['tidak_layak']['k12']['pedagang'] = $data['tidak_layak']['k12']['pedagang'] + 1;
					}elseif ($valll['k12'] == "Karyawan Swasta") {
						$data['tidak_layak']['k12']['karyawan_swasta'] = $data['tidak_layak']['k12']['karyawan_swasta'] + 1;
					}
				}

				$k13t = count($data['tidak_layak']['k13']) - count(array_intersect(array_keys($data['tidak_layak']['k13']), $atr_ilang));
				if ($k13t >=  2) {
					if ($valll['k13'] == "Tidak Tamat SD") {
						$data['tidak_layak']['k13']['tidak_tamat_sd'] = $data['tidak_layak']['k13']['tidak_tamat_sd'] + 1;
					}elseif ($valll['k13'] == "Tamat SD") {
						$data['tidak_layak']['k13']['tamat_sd'] = $data['tidak_layak']['k13']['tamat_sd'] + 1;
					}elseif ($valll['k13'] == "Tamat SMA") {
						$data['tidak_layak']['k13']['tamat_sma'] = $data['tidak_layak']['k13']['tamat_sma'] + 1;
					}
				}

				$k14t = count($data['tidak_layak']['k14']) - count(array_intersect(array_keys($data['tidak_layak']['k14']), $atr_ilang));
				if ($k14t >=  2) {
					if ($valll['k14'] == "Ya") {
						$data['tidak_layak']['k14']['ya'] = $data['tidak_layak']['k14']['ya'] + 1;
					}elseif ($valll['k14'] == "Tidak") {
						$data['tidak_layak']['k14']['tidak'] = $data['tidak_layak']['k14']['tidak'] + 1;
					}
				}
			}

			$entropy = $this->entropy($data);
			$gain = $this->gain($entropy, $data);
// echo json_encode($data);exit;
			$atr = $gain['instruksi']['atribut'];
			if (isset($gain['instruksi']['buang'])) {
				$atr_buang = $gain['instruksi']['buang'];
				foreach ($atr_buang as $k) {
					array_push($atr_ilang, $k);
				}
			}
			// hasil dari node
			$aa = "hasil ke".$node; 
			$arr_name = "node".$node;
			
			$out[$arr_name]['atribut'] = $atr;
			$out[$arr_name]['layak'] = array();
			$out[$arr_name]['tidak_layak'] = array();
			foreach ($data['total_data'][$atr] as $key => $value) {
				$b['tes'] = 1;
				foreach ($atr_ilang as $val) {
					// echo "$key - $val<br/>";
					if ($key == $val) {
						$b['tes'] = 1;
						break;
					}else {
						$b['tes'] = $b['tes'] + 1;
					}
				}
				if ($b['tes'] > 1) {
					$out[$arr_name]['layak'][] = $key;
				}else {
					$out[$arr_name]['tidak_layak'][] = $key;
				}
			}
			// if ($node == 2) {
			// 	echo json_encode($out);exit;
			// }

			// penghilangan beberapa atribut di pencarian mysql
			if (count($atr_buang) > 0) {
				foreach ($atr_buang as $buang) {
					if ($buang == "kayu_murahan") {
						$buang = "Kayu Murahan";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "kayu_berkualitas_rendah") {
						$buang = "Kayu Berkualitas Rendah";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tembok_tanpa_diplester") {
						$buang = "Tembok Tanpa Plester";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tembok_diplester") {
						$buang = "Tembok di Plester";
						$hasil_hilang[] = "$atr BETWEEN 17 AND 24";
					}elseif ($buang == "memiliki_fasilitas_bab") {
						$buang = "Memiliki Fasilitas BAB";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tidak_memiliki") {
						$buang = "Tidak Memiliki";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "menggunakan_listrik") {
						$buang = "Menggunakan Listrik";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tidak_menggunakan_listrik") {
						$buang = "Tidak Menggunakan Listrik";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "kayu_bakar") {
						$buang = "Kayu Bakar";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "gas_lpg") {
						$buang = "Gas LPG";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tidak_sanggup") {
						$buang = "Tidak Sanggup";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "karyawan_swasta") {
						$buang = "Karyawan Swasta";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tidak_tamat_sd") {
						$buang = "Tidak Tamat SD";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tamat_sd") {
						$buang = "Tamat SD";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}elseif ($buang == "tamat_sma") {
						$buang = "Tamat SMA";
						$hasil_hilang[] = "$atr NOT LIKE '%$buang%'";
					}else {
						$word = ucfirst($buang);
						$hasil_hilang[] = "$atr NOT LIKE '%$word%'";
					}
				}
				$debug[$aa] = $out;
			}
			$node ++;
		}

		return $debug;
	}

	public function entropy($data)
	{
		$tet = ($data['tot_layak'] != 0) ? $data['tot_layak'] : 0;
		$tot = ($data['total'] != 0) ? $data['total'] : 0;
		$tdk = ($data['tot_tdk_layak'] != 0) ? $data['tot_tdk_layak'] : 0;
		// echo "((-($tet)/$tot)*log($tet/$tot, 2)+((-($tdk)/$tot)*log($tdk/$tot, 2)))<br/>";
		// echo ((-(27)/50)*log(27/50, 2)+((-(23)/50)*log(23/50, 2)));exit;
		$entropy['total'] = ((-($tet)/$tot)*log($tet/$tot, 2)+((-($tdk)/$tot)*log($tdk/$tot, 2)));
		$a = array_keys($data['total_data']);
		$i = 0;
		foreach ($a as $atr) {
			$val = array_keys($data['total_data'][$atr]);
			foreach ($val as $key) {
				$tet = ($data['layak'][$atr][$key] != 0) ? $data['layak'][$atr][$key] : 0;
				$tot = ($data['total_data'][$atr][$key] != 0) ? $data['total_data'][$atr][$key] : 0;
				$tdk = ($data['tidak_layak'][$atr][$key] != 0) ? $data['tidak_layak'][$atr][$key] : 0;

				if ($tot != 0 && $tet != 0 && $tdk != 0) {
					$entropy[$atr][$key] = ((-($tet)/$tot)*log($tet/$tot,2)+((-($tdk)/$tot)*log($tdk/$tot,2)));
				}else {
					$entropy[$atr][$key] = 0;
				}
			}
		}
		return $entropy;
	}

	public function gain($ent, $data)
	{
		$a = array_keys($data['total_data']);
		$hasil['instruksi']['max'] = 0;
		foreach ($a as $atr) {
			$val = array_keys($data['total_data'][$atr]);
			$i = 1;
			$piece = 0;
			foreach ($val as $key) {
				if ($i == 1) {
					$piece = (($data['total_data'][$atr][$key]/$data['total'])*$ent[$atr][$key]);
					$piece = ($ent['total']) - $piece;
				}else {
					$piece = $piece - (($data['total_data'][$atr][$key]/$data['total'])*$ent[$atr][$key]);
				}

				$i++;
			}

			$hasil[$atr] = $piece;
			if ($hasil[$atr] > $hasil['instruksi']['max']) {
				$hasil['instruksi']['max'] = $hasil[$atr];
				$hasil['instruksi']['atribut'] = $atr;

			}
			
		}
		$dibuang = array_keys($ent[$hasil['instruksi']['atribut']]);
		foreach ($dibuang as $tess) {
			if ($ent[$hasil['instruksi']['atribut']][$tess] == 0) {
				$hasil['instruksi']['buang'][] = $tess;
			}
		}

		return $hasil;
	}
}
