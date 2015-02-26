<?php
class Migration_Create_users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'ID' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'Created' => array(
				'type' => 'DATETIME',
				'constraint' => '6',
			),
			'FirstName' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'LastName' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
                        'Email' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '255',
                            ),
                        'Password' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'LastLogin' => array(
                                    'type' => 'DATETIME',
                                    'constraint' => '6',
                            ),
                        'LastName' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'Phone' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'Phone_Ext' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'AlternatePhone' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'SkypeName' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'Address' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
                        'City' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),
                        'ZipCode' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
                        'State' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
                        'ProfileImage' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
                        'Address2' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
                        'HasDeleted' => array(
                                    'type' => 'tinyint',
                                    'constraint' => '1',
                                    'defualt' => '0',
                            ),
                        'CompanyID' => array(
                                    'type' => 'INT',
                                    'constraint' => '11',
                            ),
                        'ZoneID' => array(
                                    'type' => 'INT',
                                    'constraint' => '11',
                            ),
                        'ProductPrecentage' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
                        'readOnly' => array(
                                    'type' => 'INT',
                                    'constraint' => '11',
                            ),
                        'IsActive' => array(
                                    'type' => 'tinyint',
                                    'constraint' => '4',
                            ),
                        'ISagentID' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '200',
                            ),
		));
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}
