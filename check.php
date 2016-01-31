<?php
        $errors = array(
            "firstname" => "",
            "lastname" => "",
            "email" => "",
            "gender" => "",
        );
	$lastname = $firstname = $email = $comment = $gender = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	   	
	   	if (empty($_POST["firstname"])) {
	    	$errors["firstname"] = "*Firstname is required";
	   	}
                else {
	     	$firstname = checkInput($_POST["firstname"]);
	     	if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
	       		$errors["firstname"] = "*Only letters allowed in firstnames"; 
	    	}
	   	}
                
                if (empty($_POST["lastname"])) {
	    	$errors["lastname"] = "*Lastname is required";
	   	}
                else {
	     	$lastname = checkInput($_POST["lastname"]);
	     	if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
	       		$errors["lastname"] = "*Only letters allowed in lastnames"; 
	    	}
	   	}
                
                
                if (empty($_POST["gender"])) {
     		$errors["gender"] = "*Gender is required";
   		} else {
     		$gender = $_POST["gender"];
   		}

	   
	   	if (empty($_POST["email"])) {
	    	 $errors["email"] = "*Email address is required";
	   	} else {
	     	$email = checkInput($_POST["email"]);
	     	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	       		$emailErr = "*Invalid email format"; 
			}
		}

		if (empty($_POST["comment"])) {
	     	$comment = "";
		} else {
	     	$comment = checkInput($_POST["comment"]);
	 	}
	}

	function checkInput($data) {
		$data = trim($data);
	   	$data = stripslashes($data);
	   	$data = htmlspecialchars($data);
	   	return $data;
	}
?>