<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table                = 'tb_users';
	protected $primaryKey           = 'id';
	protected $returnType           = 'array';
	protected $allowedFields        = ['username', 'password', 'nama'];

	public function getLogin($username, $password)
	{
		return $this->db->table($this->table)->where(['username' => $username, 'password' => md5($password)])->get()->getRowArray();
	}
}
