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
			<?php include ('check.php'); ?>
		   <p><span class="title2">OR FILL IN A CONTACT FORM!</span></p>
		<form name=contactForm method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		    <p><span class="required">*required field</span></p>
		    Name:
		    <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $firstname;?>">
		    <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $lastname;?>">
		    <span class="required">*</span>
		    
		     <span class="required"><br/><?php echo $errors["firstname"];?></span>
		     <span class="required"><br/><?php echo $errors["lastname"];?></span>
		    <br/>
		    Gender:
		    <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>> Male
		    <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>> Female
		    <span class="required">*</span>
		    
		    <span class="required"><br/><?php echo $errors["gender"];?></span>
		    <br/>
		    Email:
		     <input type="email" name="email" placeholder="something@email.com" value="<?php echo $email;?>">
		     <span class="required">*</span>
		     <span class="required"><br/><?php echo $errors["email"];?></span>
		    <br/>
		    What would you like to tell me?
		    <textarea name="comment" rows="10" cols="50"><?php echo $comment;?></textarea>
		    <br/>
		    <input type="submit" value="submit">
			<?php
				$_SESSION['slastname'] = $lastname;
				$_SESSION['sfirstname'] = $firstname;
				$_SESSION['sgender'] = $gender;
				$_SESSION['semail'] = $email;
				$_SESSION['scomment'] = $comment;
			   	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			   		if ( $errors["lastname"] == '' &&$errors["firstname"] == '' && $errors["email"]== '' && $errors["gender"]== '') {
						header('Location: contact2.php');
						exit();						
					}
				}
			   	?>
		    </form>
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
	</div>
        
	
    </body>
    </html>

