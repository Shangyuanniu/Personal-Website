    <!doctype html>
<?php session_start(); ?>     
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Shangyuan Niu's Personal Website</title>
        <link rel="stylesheet" type="text/css" href="css/css.css">
	
    </head>
    <body>
    
       <?php include 'navbar.php';?>
	<div class="content">
	    <div class="quote">
		<p><span class="title2">CONTANCT ME!</span></p>
		<div class="contactcontent">
		<p>Email: niushangyuan@gmail.com/sn522@cornell.edu</p>
		<p>Phone: (607)-379-8857</p>
		
		
		</div>
		<div class="contactcontent">
		    <div class="form">
			
		   <p><span class="title2">YOUR INPUT</span></p>
		   

		   <?php		   
				       echo "Name: ".$_SESSION['sfirstname']." ".$_SESSION['slastname'];
				       echo "<br>";
				       echo "Gender: ".$_SESSION['sgender'];
				       echo "<br>";
				       echo "Email: ".$_SESSION['semail'];
				       echo "<br>";
				       echo "Comment: ".$_SESSION['scomment'];
				    
				
			?>
		
		    </div>
		
		</div>
	      
		
		
		<p style="color: grey;">Or find me at:</p>
              <div class="socialmedia">
		<ul>
                <li><a href="https://www.facebook.com/people/Shangyuan-Niu/100008172044579"><img src="icon/facebook.png" alt="Facebook"></a></li>
                <li><a href="https://twitter.com/nsy297172408"><img src="icon/twitter.png" alt="Twitter"></a></li>
                <li><a href="http://www.linkedin.com/pub/shangyuan-niu/9b/12/602?domainCountryName=&amp;csrfToken=ajax%3A4387795361089586570"><img src="icon/linkedin.png" alt="LinkedIn"></a></li>
                <li><a href="http://www.weibo.com/nsysteven"><img src="icon/weibo.png" alt="Weibo"></a></li>
                <li><a href="http://www.renren.com/335964681/profile"><img src="icon/renren.png" alt="Renren"></a></li>
		</ul>
	      </div>
	    </div>
        <br/>
	</div>
    </body>
    </html>

