<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CrudModel;
use PHPExcel;
use PHPExcel_IOFactory;

class Data extends BaseController
{
	protected $crud;
	public function __construct()
	{
		$this->crud = new CrudModel();
	}

	public function index()
	{
		$data['title'] = "Data Penerima Bantuan";
		$data['data'] = $this->crud->read_all_data("tb_data");

		return view("Content/Data", $data);
	}

	public function p_det()
	{
		$id = $this->request->getPost('id');
		$data = $this->crud->solo_query("select k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14 from tb_data where id = '$id'");
		
		return json_encode($data);
	}
	
	public function det_edit()
	{
		$id = $this->request->getPost('id');
		$data = $this->crud->select_1_cond("tb_data", "id", $id);
		
		return json_encode($data);
	}

	public function p_edit()
	{
		$data = $this->request->getPost();

		$id = $data['id'];

		$a['nik'] = $data['nik'];
		$a['nama'] = $data['nama'];
		$a['alamat'] = $data['alamat'];
		$a['no_kks'] = $data['no_kks'];
		$a['jenis'] = $data['jenis'];
		$a['rek'] = $data['rek'];
		$a['bpnt_nokks'] = $data['bpnt_nokks'];
		$a['k1'] = $data['k1'];
		$a['k2'] = $data['k2'];
		$a['k3'] = $data['k3'];
		$a['k4'] = $data['k4'];
		$a['k5'] = $data['k5'];
		$a['k6'] = $data['k6'];
		$a['k7'] = $data['k7'];
		$a['k8'] = $data['k8'];
		$a['k9'] = $data['k9'];
		$a['k10'] = $data['k10'];
		$a['k11'] = $data['k11'];
		$a['k12'] = $data['k12'];
		$a['k13'] = $data['k13'];
		$a['k14'] = $data['k14'];

		if ($this->crud->update_data_input('tb_data', $a, 'id', $id)) {
			session()->set("flash", TRUE);
			session()->set("sign", 'success');
			session()->set("msg", "Berhasil Ubah Data");
			// session()->set("s_u_data", "Berhasil Ubah Data");
			return redirect()->to('/data');
		} else {
			session()->set("flash", TRUE);
			session()->set("sign", 'error');
			session()->set("msg", "Gagal Ubah Data");
			// session()->set('f_u', "Gagal Ubah Data");
			return redirect()->to("/data");
		}
	}

	public function p_del()
	{
		if ($this->crud->delete_truncate("tb_data")) {
			session()->set("flash", TRUE);
			session()->set("sign", 'success');
			session()->set("msg", "Berhasil Hapus Data");
			// session()->set("s_d_data", "Berhasil Hapus Data");
			return redirect()->to('/data');
		}else {
			session()->set("flash", TRUE);
			session()->set("sign", 'error');
			session()->set("msg", "Gagal Hapus Data");
			// session()->set("f_d_data", "Gagal Hapus Data");
			return redirect()->to('/data');
		}
	}

	public function p_upload()
	{
		$file = $this->request->getFile('file');
		if ($file) {
			$excelReader = new PHPExcel();
			// mengambil lokasi temp file
			$fileLoc = $file->getTempName();
			// baca file
			$objPHPExcel = PHPExcel_IOFactory::load($fileLoc);
			// ambil sheet yang aktif
			$sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true, true, true);

			foreach ($sheet as $data => $value) {
				if ($data==1) {
					continue;
				}
				
				$nik = $value['A'];
				$nama = $value['B'];
				$alamat = $value['C'];
				$no_kks = $value['D'];
				$jenis = $value['E'];
				$rek = $value['F'];
				$bpnt_nokks = $value['G'];
				$k1 = $value['H'];
				$k2 = $value['I'];
				$k3 = $value['J'];
				$k4 = $value['K'];
				$k5 = $value['L'];
				$k6 = $value['M'];
				$k7 = $value['N'];
				$k8 = $value['O'];
				$k9 = $value['P'];
				$k10 = $value['Q'];
				$k11 = $value['R'];
				$k12 = $value['S'];
				$k13 = $value['T'];
				$k14 = $value['U'];
				$rekom = $value['V'];

				$this->crud->save_data("tb_data", array(
					"nik" => $nik,
					"nama" => $nama,
					"alamat" => $alamat,
					"no_kks" => $no_kks,
					"jenis" => $jenis,
					"rek" => $rek,
					"bpnt_nokks" => $bpnt_nokks,
					"k1" => $k1,
					"k2" => $k2,
					"k3" => $k3,
					"k4" => $k4,
					"k5" => $k5,
					"k6" => $k6,
					"k7" => $k7,
					"k8" => $k8,
					"k9" => $k9,
					"k10" => $k10,
					"k11" => $k11,
					"k12" => $k12,
					"k13" => $k13,
					"k14" => $k14,
					"rekomendasi" => $rekom
				));
			}

			session()->set("flash", TRUE);
			session()->set("sign", 'success');
			session()->set("msg", "Berhasil Menyimpan Data");
			// session()->set("s_data", "Berhasil Menyimpan Data");
			return redirect()->to('/data');
		}else {
			session()->set("flash", TRUE);
			session()->set("sign", 'error');
			session()->set("msg", "Data Tidak Ada");
			// session()->set("f_data", "Data Tidak Ada");
			return redirect()->to('/data');
		}
	}
}
