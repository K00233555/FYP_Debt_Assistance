<?php 
$this->load->helper('url'); 
//$cssbase = base_url() .  "/"; 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();

$user = $this->session->userdata('user');
?>
<div id="footer">
    Debt Advisory Consultancy <br>
    Copyright (c) 2018 DACS 
  <div id="logo"> 
			<h1><img src="<?php echo $img_base . "assets/images/support.jpg"?>" alt="" width="305" height="130" /></h1>
    </div>  
   
</div>

</html>