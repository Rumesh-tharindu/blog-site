<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="container">
<h1 class="heading">blog Post</h1>
   <div class="blog-container">

      <?php
	   foreach($blogs as $blog)
	   {
		echo '<div class="blog">
		<div class="blog-info">
		
							
							 <a href="#">
								
									 <img class="img-responsive" src=" '.base_url().'/uploads/post-images/'.$blog['thumbnail'].'" alt="blog-image">
								
							 </a>
							 <h3> <a href="#" class="blog-link">'.$blog['title'].'</a>
							 </h3>
							 <div class="body">
								 <p>'.$blog['body'].'</p>
							 </div>
						   
						 
		</div>
	</div>
	';
	   }
	  
	 ?>
	  
   </div>
<div>
   
</div>
</div>

</body>
</html>