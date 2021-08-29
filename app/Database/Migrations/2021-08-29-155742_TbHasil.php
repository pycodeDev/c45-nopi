<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbHasil extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'           => [
                'type'              => 'INT',
                'constraint'        => 20,
                'auto_increment'    => TRUE
            ],
			'k1'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k2'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k3'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k4'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k5'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k6'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k7'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k8'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k1'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k9'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k10'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k11'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k12'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k13'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'k14'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
			'rekomendasi'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tb_hasil');
	}

	public function down()
	{
		$this->forge->dropTable('tb_hasil');
	}
}
