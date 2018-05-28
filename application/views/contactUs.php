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
$contactText = $notice['article'];
?>
<fieldset>
    <legend>Contact Us </legend>

<p>Edit the necessary details in the relevant fields below. Then press the "Submit" button at the bottom of the page </p>
<form id="form1" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/saveNoticeDetails/" . $notice['noticeId']; ?>">
 
  
  <p>
      <label for="shortDescription">Summary</label></p>
    <p>    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>"/>
  </p>
  <p>
      <label for="longDescription">Full Review</label> </p>
    <p><textarea name="longDescription" id="longDescription"  cols="45" rows="5"><?php echo $ld ?></textarea>
  </p>
    
  
  
  <p>
    <label for="article">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" value="<?php echo $dateExp ?>"/>
  </p>
   <input type="submit" name="button" id="button" value="Submit" />
</form>
    </fieldset>
<?php
$this->load->view('footer'); 
?>