<?php
$this->load->view('header'); 
$this->load->helper('url');
$img_base = base_url();
$base = base_url() . index_page();
$sd = $notice['shortDescription'];
$ld = $notice['longDescription'];
$area = $notice['area'];
$album = $notice['albumName'];
$artist = $notice['artistName'];
$dateExp = $notice['dateExp'];
$dateReview = $notice['dateUploaded'];
$image = $notice['largeImage'];
$firstname=$userNotice['FirstName'];
$surname=$userNotice['SurName'];
$mobile=$userNotice['Mobile']; 

?>
<div class="pageContents">

<form id="form1" name="form1" >
   
    
      <p>
	<img width="300" src="<?php echo $img_base . "assets/images/notices/$image"?>">
  </p>
    
    <p>
      <label class="labelHeading" for="Artist Name">Artist Name: </label>
    <?php echo $artist ?>
 
    
   
      <label class="labelHeading" for="Album Name">Album Name: </label>
     <?php echo $album ?>
       </p>

     <p>
    <label  class="labelHeading" for="area">Genre: </label> 
    <?php echo $area?>
  </p>
     <p>
    <label for="dateExp">Reviewed on </label>
 <?php echo $dateReview ?>
  by <?php echo $firstname?> 
  <?php echo $surname ?>
  </p>
    <p>    <label class="labelHeading" for="shortDescription">SoundBite: </label>
   <?php echo $sd ?>
  </p>
  <p>
    <label class="labelHeading" for="longDescription">Full Review: </label> </p>
    <!-- <textarea name="longDescription" id="longDescription"  cols="45" rows="5">

      </textarea> -->
      <p>
      <?php echo $ld ?>
  </p>

 
 

  <p>
</form>
</div>
<?php
$this->load->view('footer'); 
?>