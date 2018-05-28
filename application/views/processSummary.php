<?php 
$this->load->helper('url'); 
//$cssbase = base_url() .  "/"; 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();

$user = $this->session->userdata('user');
?>
<div class = "smallReviews">
     
    <div class = "albumSrImg1">
    <img src="<?php echo $img_base . "assets/images/PersonalInsolvency.jpg"?>" alt="ISI Icon" height = 100px width = 100px>
	 	
    </div> 
    <div class = "srAlbumTitle1"> 
    <p class = "srArtist">
        Confusion ...
        </p>
        <p class = "srTitle">
       
        </p>
    </div>

    
   
    <div class = "albumSrImg2">
<img src="<?php echo $img_base . "assets/images/calculator.jpg"?>" alt="Citizens Information Icon" height = 100px width = 100px>    </div> 
    <div class = "srAlbumTitle2"> 
    <p class = "srArtist">
        ... to ...
        </p>
        <p class = "srTitle">
        
        </p>
    
 </div>
    
   
    <div class = "albumSrImg3">
   <img src="<?php echo $img_base . "assets/images/Knowledge-is-Power.jpg"?>" alt="National Debt Relief Agency" height = 100px width = 100px>    </div>  
     
    <div class = "srAlbumTitle3"> 
    <p class = "srArtist">
        ... certainty!
        </p>
        <p class = "srTitle">
        
        </p>
    </div> 
 </div> 
    