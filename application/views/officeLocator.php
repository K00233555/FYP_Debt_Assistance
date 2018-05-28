<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$n = $this->session->userdata('AllNoticeData');

if(!$n==null){ ?>

<div class= "review">


<?php } ?>                

        <div class = "review">
            <h1>Location of main MABS offices</h1>
            <p>Click on the particular office location in order to see</p>
            <ul>
            <li>Address</li>
                <li>Contact Details</li>
                <li>Website </li>
                <li>Directions to </li>
                <p> of each particular office. </p>
            
            </ul>
         <iframe src="https://www.google.com/maps/d/embed?mid=1BVT0kKGUUfv59cMKy_KAufyJZpJso73m&hl=en" align= "middle" width="60%" height="60%"></iframe>

<h1> Links to other  Helpful Agencies </h1>
<?php
    $this->load->view('linksFooter');
?>

 </div> 

</div>


<?php
$this->load->view('footer'); 
?>