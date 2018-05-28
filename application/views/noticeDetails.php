<?php
$this->load->view('header'); 
$this->load->helper('url');
$img_base = base_url();
$base = base_url() . index_page();
$sd = $notice['shortDescription'];
$ld = $notice['longDescription'];
$area = $notice['area'];
$dateExp = $notice['dateExp'];
$image = $notice['largeImage'];
?>

<h2 class="center-text">Notice</h2>
<form id="form1" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/insertNotice"; ?>">
  <p>
    <label for="shortDescription">shortDescription</label>
    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>"/>
  </p>
  <p>
    <label for="longDescription">Long Description</label>
    <textarea name="longDescription" id="longDescription"  cols="45" rows="5"><?php echo $ld ?></textarea>
  </p>
  <p>
	<img width="300" src="<?php echo $img_base . "/assets/images/notices/$image"?>">
  </p>
  <p>
    <label for="area">Area</label> 
    <input type="text" name="area" id="area" value="<?php echo $area?>"/>
  </p>
  <p>
    <label for="dateExp">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" value="<?php echo $dateExp ?>"/>
  </p>
 
</form>

<?php
$this->load->view('footer'); 
?>
