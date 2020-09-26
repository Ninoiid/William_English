<?php include('arrays.php'); ?>


<!DOCTYPE html>
<html lang="en"><head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600,900" rel="stylesheet" type="text/css">
  
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet"> 
    
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">     
  
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
	
	<!-- PHP
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

	
	
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <!-- Header -->
	
  
  <div class= "u-full-width top-bar"></div>

  <header id="hdr" class= "u-full-width header">
        
    <div class="container h_box">
          
      <div id="lgo" class="row show-lgo"> 
        
        <!-- Logo -->
        
        <div> 
          
            <a href="index.php">
				<img class="logo" src="images/logo.png">
            <img  class="logo-image" src="images/logo_img.png"></a> 
          
		</div>
        
          <div class="decor-line-hor"></div>
          
       </div>
        <!-- Buttons -->
        
        <nav id="nv" class="nav-full">
            
          <ul class="nav-links">
              
              <li>
                <a href="index.php">HOME</a>
              </li>
              
              <li>
                <a href="journal.php">JOURNAL</a>
              </li>
			  
			  
              
              <li>
                <a href="biography.php">BIOGRAPHY</a>
				  
				 <ul>
					  
					  <li><a href="#"><?php echo $article[0][name] ?></a></li>
					  <li><a href="#"><?php echo $article[1][name] ?></a></li>
					  <li><a href="#"><?php echo $article[2][name] ?></a></li>
					  <li><a href="#"><?php echo $article[3][name] ?></a></li>
					  <li><a href="#"><?php echo $article[4][name] ?></a></li>
					  <li><a href="#"><?php echo $article[5][name] ?></a></li>
					  <li><a href="#"><?php echo $article[6][name] ?></a></li>
					  
				  </ul>	  
				  
              </li>
			  
              
              <li>
                <a href="#">FAMILY TREE</a>
              </li>
              
              <li>
                <a href="#">MAP</a>
              </li>
              
            
           
          </ul>
           
         <!-- <div style="background-color: blue; width: 30px; height: 30px;"></div> -->   
            
          <div> 
              
            <div class="burger">  

                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
              
            </div>
              
          </div>
       </nav>
      
      
          
   </div>
        
  </header>
    
  <div class="container" style="margin-top: 180px;">
  