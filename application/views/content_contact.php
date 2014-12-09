<div id="contact">
<?php 
    $this->load->helper("form");
	echo form_open("mysite/send_email");
	echo form_label("Name: ", "fullname");
	$data=array(
	     "name"  => "fullname",
		 "id"    => "fullname",
		 "value" => "",
	
	);
	echo form_input($data);
	
	echo form_label("Email: ", "fullname");
	$data=array(
	     "name"  => "email",
		 "id"    => "email",
		 "value" => "",
	
	);
	echo form_input($data);
	
	echo form_label("Message", "message");
	$data=array(
	     "name"  => "message",
		 "id"    => "message",
		 "value" => "",
	
	);
	echo form_textarea($data);
	echo form_submit("contactsubmit", "Send!");
	
	echo form_close();

?>    
</div>