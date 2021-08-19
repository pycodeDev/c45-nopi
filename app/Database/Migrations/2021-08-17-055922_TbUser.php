<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'           => [
                'type'              => 'INT',
                'constraint'        => 20,
                'auto_increment'    => TRUE
            ],
            'username'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'password'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
			],
			'nama'				=> [
				'type'	=>	'VARCHAR',
				'constraint'	=>	'100',
			],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tb_users');
	}

	public function down()
	{
		$this->forge->dropTable('tb_users');
	}
}
