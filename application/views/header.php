<?php 
$this->load->helper('url'); 
//$cssbase = base_url() .  "/"; 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();

$user = $this->session->userdata('user');
?>

<!DOCTYPE>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Debt Advisory Consultancy Service</title>
<meta name="keywords" content="Debt Advice, Personal Insolvency, Assistance, Bankruptcy" />
<meta name="description" content="A website dedicated to helping those in financial difficulty in Ireland" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet" type="text/css" />
<link href="<?php echo $cssbase . "assets/css/styles.css"?>" rel="stylesheet" type="text/css" media="all" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
<script type="javascript" src="<?php echo base_url() . "assets/js/jquery.validate.js"?>"></script>
</head>

<body>
<div class = "review">
	<div id="header">
        <h1 class = "dacsLogo"> DACS </h1>
		<div id="headerLogo"> 
             
			<!--<h1><img src="<?php echo $img_base . "assets/images/helping.jpg"?>" alt="" width="305" height="130" /></h1> -->
            <?php
    
    $this->load->view('processSummary');
    ?>
		</div>
       
	</div>
	<nav class="menu">
		<ul class = "mainMenu">
			<li ><a class="mainMenuItem" href="<?php echo "$base/User"; ?>">Home & DACS Tool</a></li>
			<?php if ($user['UserID'] > 0) {?>
				<li><a class="mainMenuItem" href="<?php echo "$base/User/userHomePage/". $user['UserID']; ?>">My Home Page</a></li>
                <li><a class="mainMenuItem" href="<?php echo "$base/User/logout/". $user['UserID']; ?>">Log Out</a></li>
				<li ><a class="mainMenuItem"  href="<?php echo "$base/User/doLinks"; ?>">Links & Contacts</a></li>
				<li ><a class="mainMenuItem"  href="<?php echo "$base/User/doFindOffice"; ?>">Find a DACS Office</a></li>
				
			<?php } else { ?>
				<li ><a class="mainMenuItem"  href="<?php echo "$base/User/doLinks"; ?>">Links & Contacts</a></li>
				<li ><a class="mainMenuItem"  href="<?php echo "$base/User/doFindOffice"; ?>">Find a DACS Office</a></li>
			<?php } ?>
		</ul>
	</nav> 
    </div>
	<p>&nbsp;</p>