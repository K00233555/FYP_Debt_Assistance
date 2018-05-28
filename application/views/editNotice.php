<?php
$this->load->view('header'); 
$this->load->helper('url');
$img_base = base_url();
$base = base_url() . index_page();
$album = $notice['albumName'];
$artist = $notice['artistName'];
$sd = $notice['shortDescription'];
$ld = $notice['longDescription'];
$area = $notice['area'];
$dateExp = $notice['dateExp'];
$image = $notice['largeImage'];
?>
<fieldset>
    <legend>Editing Review Details</legend>
<h1 class="center-text">Review Details </h1>
<p>Edit the necessary details in the relevant fields below. Then press the "Submit" button at the bottom of the page </p>
<form id="form1" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/saveNoticeDetails/" . $notice['noticeId']; ?>">
 <p>
      <label for="albumName">Album Name</label></p>
    <p>    <input type="text" name="albumName" id="albumName" value="<?php echo $album ?>"/>
  </p>
    
     <p>
      <label for="artistName">Artist</label></p>
    <p>    <input type="text" name="artistName" id="artistName" value="<?php echo $artist ?>"/>
  </p>
    <p>
        <label for="area">Genre</label> </p>
   <p> <input type="text" name="area" id="area" value="<?php echo $area?>"/>
  </p>
  <p>
      <label for="shortDescription">Summary</label></p>
    <p>    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>"/>
  </p>
  <p>
      <label for="longDescription">Full Review</label> </p>
    <p><textarea name="longDescription" id="longDescription"  cols="45" rows="5"><?php echo $ld ?></textarea>
  </p>
    <p><label for="userfile">Album Art</label></p>
    <p><img src="<?php echo $img_base . "/assets/images/notices/$image"?>"></p>
	
		<p>
		<input name="userfile" type="file" id="userfile" size="45" />
	</p>
  
  
  <p>
    <label for="dateExp">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" value="<?php echo $dateExp ?>"/>
  </p>
   <input type="submit" name="button" id="button" value="Submit" />
</form>
    </fieldset>
<?php
$this->load->view('footer'); 
?>