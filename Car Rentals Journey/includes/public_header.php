<?php
session_start();
    include('includes/connection.php'); 
    

    if (isset($_POST['signup'])){
		//fetch Data from web form

		$name    	= $_POST['name'];
		$birth_date = $_POST['birth_date'];
		$national_id= $_POST['national_id'];
		$license_id = $_POST['license_id'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$mobile    	= $_POST['mobile'];
		$location 	= $_POST['location'];
		$address 	= $_POST['address'];
		$city 		= $_POST['city'];
		$country 	= $_POST['country'];

		$query = "INSERT INTO customer (name,birth_date,national_id,license_id,email, password,mobile,location,address,city,country) VALUES ('$name','$birth_date','$national_id','$license_id','$email', '$password','$mobile','$location','$address','$city','$country')";
		//perform query
		if(mysqli_query($conn,$query)){

			echo "<script>window.top.location='index.php'</script>";
		}

}

	if (isset($_POST['login'])) {
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        if (!empty($email) && !empty($password)) {
            $query  = " SELECT * FROM customer
                        WHERE email    = '$email'
                        AND   password = '$password' ";
  
            $result = mysqli_query($conn,$query);
            $row    = mysqli_fetch_assoc($result);
  
            if ($row['customer_id']) {
               $_SESSION['customer_id'] = $row['customer_id'];
               header("location:index.php");
            }
            else{
               $error = "Sorry you are Not Autorized";
			   echo "<script>window.top.location='#login'</script>";
  
            }
        }
	}
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
			<!-- favicon -->
  			<link rel="icon" type="image/png" href="admin/dist/img/AdminLogo.png" sizes="16x16">
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="img/fav.png">
			<!-- Author Meta -->
			<meta name="author" content="codepixer">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- Site Title -->
			<title>Car Rentals</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
				<!--
				CSS
				============================================= -->
				<link rel="stylesheet" href="css/linearicons.css">
				<link rel="stylesheet" href="css/font-awesome.min.css">
				<link rel="stylesheet" href="css/bootstrap.css">
				<link rel="stylesheet" href="css/magnific-popup.css">
				<link rel="stylesheet" href="css/nice-select.css">					
				<link rel="stylesheet" href="css/animate.min.css">
				<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
				<link rel="stylesheet" href="css/owl.carousel.css">
				<link rel="stylesheet" href="css/main.css">
		</head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<body>
		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo2.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			            <li class="menu-active"><a href="index.php">Home</a></li>
			            <li><a href="cars.php">Cars</a></li>
			            <li><a href="index.php#service">Services</a></li>
			            <li><a href="contact.php">Contact</a></li>
			            	<?php
			            		if (isset($_SESSION['customer_id'])) {
			            			$query  = "SELECT * FROM customer Where customer_id={$_SESSION['customer_id']}";
				                    $result = mysqli_query($conn,$query);
				                    $row    = mysqli_fetch_assoc($result);
				            		echo "<li class='menu-has-children'><a href=''>{$row['name']}</a>
							  	            <ul>";
							  	    echo '		<li><a href="logout.php">Logout</a></li>
							  	            </ul>
							  	          </li>';
			            		}else{
			            			echo '<li class="menu-has-children"><a href="">Registration</a>
						  		            <ul>
						  		               <li><a href="Signup.php" data-toggle="modal" data-target=".bd-signup-modal-lg">Sign up</a></li>
						  		               <li><a href="login.php#" data-toggle="modal" data-target=".bd-login-modal-lg">Log in</a></li>
						  		            </ul>
					  		              </li>';
			            		}
			            	?>
			            <!-- <li class="menu-has-children"><a href="">Pages</a>
			              <ul>
			                <li><a href="blog-single.html">Blog Single</a></li>
			                <li><a href="elements.html">Elements</a></li>
			              </ul>
			            </li>		 -->	          
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header>
		  <!-- #header -->
