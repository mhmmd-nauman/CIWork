<div id="contact">
<?php 
    
    $this->load->helper("form");
		
	echo form_open("mysite/send_email");
	echo $message;echo"<br>";
	echo form_label("Name: ", "fullname");
	$data=array(
	     "name"  => "fullname",
		 "id"    => "fullname",
		 "value" => set_value("fullname"),
	
	);
	echo form_input($data);
	
	
	echo form_label("Email: ", "email");
	$data=array(
	     "name"  => "email",
		 "id"    => "email",
		 "value" => set_value("email"),
	
	);
	echo form_input($data);
	
	echo form_label("Message", "message");
	$data=array(
	     "name"  => "message",
		 "id"    => "message",
		 "value" => set_value("message"),
	
	);
	echo form_textarea($data);
	echo form_submit("contactsubmit", "Send!");echo "<br>";
	echo validation_errors('<p class="error"></p>');
	
	echo form_close();

?>    
</div>