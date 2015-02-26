<?php
class Migration_Create_Group extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'CompanyAttached' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
			'ClassName' => array(
				'type' => 'ENUM',
				'constraint' => '128',
			),
			'Created' => array(
				'type' => 'DATETIME',
				'constraint' => '6',
			),
                    'LastEdited' => array(
				'type' => 'DATETIME',
				'constraint' => '6',
			),
                    'Title' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'Description' => array(
				'type' => 'DATETIME',
				'constraint' => '6',
			),
                    '	Code' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'Locked' => array(
				'type' => 'tinyint',
				'constraint' => '1',
                                'defualt' => '0',
			),
                    'Sort' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                    'HtmlEditorConfig' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'ParentID' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                    'AccessAllSubsites' => array(
				'type' => 'tinyint',
				'constraint' => '1',
                                'defualt' => '0',
			),
                    'SiteType' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'Membership' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                    
                    'IsGroupSale' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                   
		));
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('group');
	}

	public function down()
	{
		$this->dbforge->drop_table('group');
	}
}


