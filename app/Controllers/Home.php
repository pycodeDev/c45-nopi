<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->auth = new UserModel();
	}

	public function index()
	{
		$data['title'] = "Login Sistem Klasifikasi";
		return view('Login', $data);
	}

	public function p_login()
	{
		$username = htmlspecialchars($this->request->getPost('username'));
		$password = htmlspecialchars($this->request->getPost('password'));

		$cekLogin = $this->auth->getLogin($username, $password);

		if (!empty($cekLogin)) {
			session()->set("id", $cekLogin['id']);
			session()->set("username", $cekLogin['username']);
			session()->set("nama", $cekLogin['nama']);

			$nama = $cekLogin['nama'];

			session()->set("flash", TRUE);
			session()->set("sign", 'success');
			session()->set("msg", "Selamat Datang $nama");
			// session()->set("s_login", "Selamat Datang $nama");
			return redirect()->to('/home');
		}else {
			session()->set("flash", TRUE);
			session()->set("sign", 'error');
			session()->set("msg", "Login Gagal :3");
			// session()->set("f_login", "Login Gagal :3");
			return redirect()->to('/');
		}
	}

	public function p_logout()
	{
		$array = ['id', 'username', 'nama'];
		session()->remove($array);
		session()->set("flash", TRUE);
		session()->set("sign", 'success');
		session()->set("msg", "Anda Sudah Logout");
		// session()->set("s_logout", "Anda Sudah Logout");
		return redirect()->to('/');
	}
}
