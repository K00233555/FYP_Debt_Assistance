<?php
$this->load->helper('url');
$base = base_url() . index_page();
$this->load->view('header'); 
$this->load->helper('url');
?>

<form id="form1" name="form1" method="post" action="<?php echo "$base/User/RegisterUser"; ?>">
  <h1 class="center-text">Register User</h1>
    <h2> Enter all the relevant fields and then press the "Submit Details" <br> button at the bottom of the screen </h2>
  <p>
    <label for="UserName">User Name</label>
    <input type="text" name="UserName" id="UserName" />
  </p>
  <p>
    <label for="Password">Password</label>
    <input type="text" name="Password" id="Password" />
  </p>
  <p>
    <label for="FirstName">First Name</label>
    <input type="text" name="FirstName" id="FirstName" />
  </p>
  <p>
    <label for="Surname">Surname</label>
    <input type="text" name="Surname" id="Surname" />
  </p>
  <p>
    <label for="Mobile">Mobile</label>
    <input type="text" name="Mobile" id="Mobile" />
  </p>
  <p>
    <label for="AddressLine1">Address Line 1</label>
    <input type="text" name="AddressLine1" id="AddressLine1" />
  </p>
  <p>
    <label for="AddressLine2">Address Line 2</label>
    <input type="text" name="AddressLine2" id="AddressLine2" />
  </p>
  <p>
    <label for="AddressLine3">Address Line 3</label>
    <input type="text" name="AddressLine3" id="AddressLine3" />
  </p>
  <p>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" />
  </p>
  <p>
    <input class = "submitButton" type="submit" name="button" id="button" value="Submit Details" />
  </p>
</form>
<?php
$this->load->view('footer'); 
?>