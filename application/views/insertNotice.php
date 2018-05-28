<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
?>

<h1 class="center-text">Review Submission</h1>
<form id="form1" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/insertNotice"; ?>">
  <p>
    <label for="albumName">Album Name</label>
    <input type="text" name="albumName" id="albumName" />
  </p> 
     <p>
    <label for="artistName">Artist</label>
    <input type="text" name="artistName" id="artistName" />
  </p>  

  <p>
    <label for="longDescription">Long Description</label><br>
    <textarea name="longDescription" id="Full Review" cols="45" rows="25"></textarea>
  </p>
  <p>
    <label for="userfile">Album Art</label>
	<input name="userfile" type="file" id="userfile" size="45" />
  </p>
  <p>
    <label for="area">Genre</label>
    <input type="text" name="area" id="area" />
  </p>
  <p>
    <label for="dateExp">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<?php
$this->load->view('footer'); 
?>