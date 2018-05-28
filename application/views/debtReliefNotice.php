<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
$this->load->helper('form');
?>
<div class = "review">
 
    <h1>Debt Relief Notice</h1>
    <h2>It seems as if the best course of action for you to take would be to seek a Debt Relief Notice.</h2>
    <p>The next step is to set up an initial appointment with a relevant DACS officer.</p>
    <p> It is important to note that this meeting can be: </p>
    <ul>
    <li>Held at any office, so long as an appointment is made. You are not obligated to go to your local DACS office.</li>
    <li>Informal and casual in nature - the important thing is that the process is started!</li>
    <li>If you wish, you can bring relevant information to the consultation.  This information will be treated confidentially and all our staff are bound by legislation in relation to disclosure.</li>
    <li>If it is a case of not being sure of what officer you should see, please don't worry. Our appointments usually allow for quick reference and consultation with the other relevant officer within half an hour. </li>
        <li>However, it is important to note that while DACS advisory services are informative and invaluable </li>
    </ul>
    <form id="form1" name="form1" method="post" action="<?php echo "$base/User/RegisterUserNumberDRN"; ?>">
        <h2>Please set up a User Name and Password for this appointment. Please keep note of both user name and password <br>as they will be vital if you need to change details of your appointment later. </h2>
    <div class = "inputNamePassword"> 
        <h1>Enter User Name:</h1> <input type="text" class = "inputText" name = "userName"> <br>
        <h1>Enter Password: </h1> <input type="text" class = "inputText" name = "passWord"><br>
    
      <p>
    <input class = "button1" type="submit" name="button" id="button" value="Click to submit name and password" />
  </p>
     </div>   
       <!-- <div class="g-recaptcha" data-sitekey="6Lc-fVcUAAAAAJQ-7JVsiAVQMFXLS2A_4xuqS6AH"></div> -->
</form>
    
    <?php
    $this->load->view('linksFooter');
    ?>
 <?php
$this->load->view('footer'); 
?>
    
</div>
