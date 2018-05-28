<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
$img_base = base_url();
?>




<div class = "review">
    <div class = "appointmentDetails">
<h1 class="tableHeading">Bookings Details</h1>
<p class="center-text">Hi <?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');
echo $user['UserName']; ?></p>

<p class="center-text">You are currently booked for a  <?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');
echo $user['AddressLine1']. " consultation"; ?></p>

<!--<p class="center-text">Location =>  <?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');
echo $user['AddressLine2']; ?></p>

 <p class="center-text">Debt Relief Advisor =>  <?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');
echo $user['officer']; ?></p> -->
    <form method = "post" name = "dateTime" id = "appointmentDetails" action="<?php echo "$base/Notice/insertAppointment"; ?>">
    
        <h1>Preferred Location of Meeting </h1>
        <h2>This does not have to be your local office </h2>
        <select class = "locationMenu" name = "location">
            <option value = "Default"> Click on arrow -> </option>
        <option value = "Limerick"> Limerick</option>
        <option value = "Cork"> Cork</option> 
         <option value = "Dublin">Dublin</option>
         <option value = "Galway">Galway</option>
        </select>
        <h1>Date and Time Selector</h1>

  <h2>Select a date <br>Click on the arrow to show Calendar:</h2>
  <input class = "datePicker" type="date" name="dayOfAppointment" id = "dayOfAppointment" >
<h2>Select an approximate time of arrival <br> Office Hours: 12.00 - 16:30 </h2>
        <p></p>
        <input class = "timePicker" type="time" name = "timeOfAppointment"  id = "timeOfAppointment" min = "12:00" max = "16:30" step= "00:30">
       <p></p>
    <input class = "bookingsButton" type = "submit" name = "Submit" value = "Submit Details of Booking" >
</form>
    
</div>
 
<p class="center-text">
<!--	<a href="
<?php echo "$base/User/getUpdateDetails/" . $user['UserID']; ?>">Edit Your Booking Details</a> -->
	&nbsp;&nbsp;&nbsp;&nbsp;
	<!--<a href="<?php echo "$base/Notice/doInsertNotice/"?>">Add a new booking</a> -->
	&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- <a href="<?php echo "$base/User/logout/"?>">Log out of your account</a> -->
    </p>

<?php
if(!$n==null){
?>
    <div class = "appointmentDetails">
	<h2 > Appointment Details</h2>
    
	<table border="1">
		<th>Street Map of Office Location</th>
        
<?php
		foreach ($n as $notice){
            echo "<p>". "Booking Number: " . $notice['noticeId']. " / ";
            echo  " "."Relevant Officer: " . $notice['shortDescription'] . "</p>";
            echo "<p>" ."Date: " . $notice['dateUploaded'] . " ";
            echo " / " ."Time: " .$notice['dateExp'] . "</p>";
            echo "<p>" ."Area of Discussion: ". $notice['area']."</p>";
			echo "<tr>";
				echo "<td> <a href=\"$base/Notice/getDrillDownNotice/". 
					$notice['noticeId'] . "\"><img src=\"$img_base/assets/images/thumbs/". 
					$notice['largeImage']. "\" /> </a> </td>";
				
				
			echo "</tr>";
		}
?>
	</table>
        </div>
  <?php } ?>              
</div>
<?php
$this->load->view('linksFooter');
?>
<?php
$this->load->view('footer'); 
?>