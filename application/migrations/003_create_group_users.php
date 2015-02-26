<?php
class Migration_Create_Group_Users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'GroupID' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
			'UserID' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
			
                   
		));
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('group_users');
	}

	public function down()
	{
		$this->dbforge->drop_table('group_users');
	}
}


