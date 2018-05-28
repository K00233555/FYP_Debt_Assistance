<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
?>

<form id="form1" name="form1" method="post" action="<?php echo "$base/User/saveUserDetails/" . $User['UserID']; ?>">
  <h1>Update User</h1>
  <p>
  <label for="UserName">User Name</label>
    <input type="text" name="UserName" id="UserName" value ="<?php echo $User['UserName'] ?> " />
  </p>
  <p>
    <label for="Password">Password</label>
    <input type="text" name="Password" id="Password" value ="<?php echo $User['Password'] ?> "/>
  </p>
  <p>
    <label for="FirstName">First Name</label>
    <input type="text" name="FirstName" id="FirstName" value ="<?php echo $User['FirstName'] ?> "/>
  </p>
  <p>
    <label for="Surname">Surname</label>
    <input type="text" name="Surname" id="Surname" value ="<?php echo $User['SurName'] ?> "/>
  </p>
  <p>
    <label for="Mobile">Mobile</label>
    <input type="text" name="Mobile" id="Mobile" value ="<?php echo $User['Mobile'] ?> "/>
  </p>
  <p>
    <label for="AddressLine1">Address Line 1</label>
    <input type="text" name="AddressLine1" id="AddressLine1" value ="<?php echo $User['AddressLine1'] ?> "/>
  </p>
  <p>
    <label for="AddressLine2">Address Line 2</label>
    <input type="text" name="AddressLine2" id="AddressLine2" value ="<?php echo $User['AddressLine2'] ?> "/>
  </p>
  <p>
    <label for="AddressLine3">Address Line 3</label>
    <input type="text" name="AddressLine3" id="AddressLine3" value ="<?php echo $User['AddressLine3'] ?> "/>
  </p>
  <p>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value ="<?php echo $User['Email'] ?> " />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>

<?php
$this->load->view('footer'); 
?>