<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Site</title>
    <style type="text/css">
	  body, html{margin:0; padding:0}
	  
	  body{background:#eee;}
	  h1, p, a, li, ul{font-family:Arial, Helvetica, sans-serif;
	  color:#000;
	  text-decoration:none;
	  }
	  #header{
		  height:130px;
		  width:1000px;
		  margin:0 auto;
		  padding:20px;
		  background-color:#999;
	  }
	  #logo{
		  height:30px;
		  width:20%;
		  float:left;
		  padding:48px;
		  
	  }
	  #nav a:hover{color:#0F3;}
	  #nav{
	  margin:auto;
	  background-color:#888;
	  padding:20px;
	  width:1000px;
	  height:15px;
	  }
	  #nav ul{
		  list-style:none;
		  float:left;
		  margin:0 50px;
	  }
	  #nav ul li{
		  display:inline;
	  }
	  #content{
		  width:1000px;
		  min-height:100%;
		  margin:0 auto;
		  padding:20px;
	  }
	  #footer{
		  width:400px;
		  height:15px;
		  margin:0 auto;
		  padding:20px;
		  color:#777;
	  }
	</style>

</head>
<body>

    <div id="container">
        <div id="header">
             <div id="logo"></div>
        </div>
        <div id="nav">
                 <ul>
                   <li><a href="#">Home</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="#">Contact</a></li>
                   
                 </ul>
        </div>
	</div>
      
    <div id="content">
    <h1>Home Page</h1>
    <p>Welcome to new site</p>
    <p>
    If you are building a large application you might find it convenient to 
	organize your controllers into sub-folders. CodeIgniter permits you to do this.

Simply create folders within your application/controllers directory and place
 your controller classes within them.

Note:  When using this feature the first segment of your URI must specify the folder.
 For example, lets say you have a controller located here:
    </p>
    </div>
     
	<div id="footer">
    <p>Copyright (c) 2014 mysite.com all right reserved</p>
    </div>

</body>
</html>