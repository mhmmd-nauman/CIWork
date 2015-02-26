<?php
class Migration_Create_Company extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'CompanyName' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'CompanyDescription' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'MerchantID' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                    'HasDeleted' => array(
				'type' => 'tinyint',
				'constraint' => '2',
                                
			),
                    'InvoiceImage' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'Phone' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'Email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'Address1' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                   'Address2' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'City' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
                    'State' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                    'Zip' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                    'SendInvoice' => array(
				'type' => 'INT',
				'constraint' => '1',
                                'default' => '1',
			),
                    'InfusionSoftID' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                    
                    'MerchantType' => array(
				'type' => 'INT',
				'constraint' => '11',
                                 'default' => '1',
			),
                     'Website' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                     'CC' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                     'InvoiceAttachmentType' => array(
				'type' => 'tinyint',
				'constraint' => '4',
                                'default' => '1',
			),
                     'InvoiceAttachment' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                    'EmailSignature' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                    'CompanyHours' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                    'IsActive' => array(
				'type' => 'tinyint',
			 	'constraint' => '4',
                                'default' => '1',
			),
                    'TagID' => array(
				'type' => 'INT',
				'constraint' => '11',
			),
                    'CompanyEdit' => array(
				'type' => 'INT',
				'constraint' => '6',
                        'default' => '0',
			),
                    'InfoEdit' => array(
				'type' => 'INT',
				'constraint' => '1',
                         'default' => '0',
			),
                    'AuthForm' => array(
				'type' => 'INT',
				'constraint' => '1',
                         'default' => '0',
			),
                     'ReplyTo' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
                   
		));
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('company');
	}

	public function down()
	{
		$this->dbforge->drop_table('company');
	}
}


