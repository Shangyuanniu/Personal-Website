
        <div class="Navigation">
	    <div id="nav-up">
	    <img src="img/guitar.jpg" width="120" alt="guitar">
            <p id="title">MINIMALISM</p>
	    </div>
	    <div id="nav-down">
		
            <ul>
		<?php
		$menu_items = array(
		    'Home'=>'index.php',
		    'About'=>'about.php',
		    'Writing'=>'writing.php',
		    'Gallery'=>'gallery.php',
		    'Contact'=>'contact.php',
		);
		foreach($menu_items as $title=>$link){
		    print("<li><a href='$link'>$title</a></li>");
		}
		?>
            </ul>
	    </div>
            <br/>
	    <div class="Copyright"><p>Copyright 2014-2015@Cornell University<br>Shangyuan(Steven) Niu<br>All rights reserved</p></div>
        </div>
