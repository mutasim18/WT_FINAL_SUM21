<?php
	include($_SERVER['DOCUMENT_ROOT']."/WT_FINAL_SUM21/project/model/db_config.php");
    //include "../model/db_config.php";

	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $address="";
    $err_address="";
	$db="";
	$err_db="";
	
	
	$hasError=false;
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

        //User name//
        if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="-User Name Required-";
		}
		// elseif (strlen($_POST["uname"]) <=6)
		// {
		// 	$hasError = true;
		// 	$err_uname = "-User Name must be greater than 6 characters-";
		// }
		// else if(strpos($_POST["uname"]," "))
		// {
		// 	$err_uname = "-no space is allowed-";
		// }	
		// else
		{
			$uname = $_POST["uname"];
		}

        //Password//
        if(empty($_POST["pass"])){
			$hasError=true;
			$err_pass="-Password Required-";
		}
		else
		{
			$pass = $_POST["pass"];
		}
		// elseif(strlen($_POST["pass"]) <=8)
		// {
		// 	$hasError = true;
		// 	$err_pass = "-Password must be greater than 8 characters-";
		// }
		// else if(strpos($_POST["pass"],"#"||"?"))
		// {
		// 	$err_pass = "-Dont use those special characters in your password-";
		// }	
		// else
		// {
		// 	$pass = $_POST["pass"];
		// }

        //Email//
        if(empty($_POST["email"]))
		{
			$hasError=true;
			$err_email="-Email is Required-";
		}
		else if(!strpos($_POST["email"],"@"))
		{
			$err_email = "*-Invalid Email-";
		}
		else
		{
			$email = $_POST["email"];
		}

        // Phone
        if(!empty($_POST["phone"]))
		{
			$hasError=true;
			$err_phone="-Phone number is Required-";
		}
		
		else
		{
			$phone = $_POST["phone"];
		}

        // Address
        if(empty($_POST["address"])){
			$hasError=true;
			$err_address="-Address is Required-";
		}
		else
		{
			$address = $_POST["address"];
		}
		echo $uname;
		$hasError=false;
		if(!$hasError){
            $rs= insertUser($uname,$pass,$email,$phone,$address);
            if($rs === true)
            {
                header("Location: login.php");
            }
			echo $_POST["uname"]."<br>";
			echo $_POST["pass"]."<br>";
            echo $_POST["email"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
			if (authenticateUser($uname,$pass))
			{
				header("Location: admin_dashboard.php");
			}
			$err_db = "Username or password invalid";

			}
		}
        function insertUser($uname,$pass,$email,$phone,$address)
        {
            $query= "insert into users values(NULL,'$uname','$pass','$email','$phone','$address')";
            return execute($query);
        }
		function authenticateuser($uname,$pass)
		{
			$query = "select * from users where username='$uname' and password='$pass'";
			$rs = get($query);
			if (count($rs)>0)
			{
				return 0;
			}
			return false;
		}


?>