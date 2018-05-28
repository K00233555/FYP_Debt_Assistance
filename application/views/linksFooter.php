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
     <a href = "https://www.isi.gov.ie/"  target="_blank"><img src="<?php echo $img_base . "assets/images/isi.jpg"?>" alt="ISI Icon"></a>
	 	
    </div> 
    <div class = "srAlbumTitle1"> 
    <p class = "srArtist">
        Insolvency Service of Ireland
        </p>
        <p class = "srTitle">
        Debt Advisory service
        </p>
    </div>

    
   
    <div class = "albumSrImg2">
<a href = "http://www.citizensinformation.ie/en/"  target="_blank"><img src="<?php echo $img_base . "assets/images/citizensInformation.jpg"?>" alt="Citizens Information Icon"></a>    </div> 
    <div class = "srAlbumTitle2"> 
    <p class = "srArtist">
        Citizens Information
        </p>
        <p class = "srTitle">
        Information in relation to <br> rights and services
        </p>
    
 </div>
    
   
    <div class = "albumSrImg3">
   <a href = "https://www.nationaldebtrelief.ie/"  target="_blank"><img src="<?php echo $img_base . "assets/images/nationalDebtRelief.jpg"?>" alt="National Debt Relief Agency"></a>    </div>  
     
    <div class = "srAlbumTitle3"> 
    <p class = "srArtist">
        National Debt Relief <br> Agency
        </p>
        <p class = "srTitle">
        Debt Relief <br>and Solutions
        </p>
    </div> 
 </div> 
    