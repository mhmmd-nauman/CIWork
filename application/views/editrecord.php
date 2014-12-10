<div id="contact">
<?php 
    $this->load->helper("form");
	echo form_open("mysite/editrecord");
	echo $message;echo"<br>";
	echo form_label("Category Group Id: ", "catgroup_id");
	$catid=array(
	     "name"  => "catgroup_id",
		 "id"    => "catgroup_id",
		 "value" => "",
	
	);
	echo form_input($catid);
	
	echo form_label("Category Name: ", "catname");
	$catname=array(
	     "name"  => "catname",
		 "id"    => "catname",
		 "value" => "",
	
	);
	echo form_input($catname);
	
	echo form_label("Category Image: ", "catimage");
	$catimg=array(
	     "name"  => "catimage",
		 "id"    => "catimage",
		 "value" => "",
	
	);
    echo form_upload($catimg);
	
	echo form_label("Category Descpription: ", "catdescrip");
	$catdescrip=array(
	     "name"  => "catdescrip",
		 "id"    => "catdescrip",
		 "value" => "",
	);
	echo form_textarea($catdescrip);
	echo form_submit("addrecord", "Add Now");
	echo validation_errors('<p class="error"></p>');
	
	echo form_close();

?>    
</div>