<?php
$this->load->view('header'); 
$this->load->helper('url');
$base = base_url() . index_page();
$this->load->helper('form');
?>
<div class = "review">
 <h1 >Social Welfare Recipient</h1>    
  <!--   <form method="get" id="form" action="User/socialWelfareAndAssets">

         <?php // Need to see why this is not working!!!! 
         
         $dataYes = array(
        'name'          => 'newsletter',
        'id'            => 'newsletter',
        'value'         => 'YES',
        'checked'       => FALSE,
        'style'         => 'margin:10px'
);
         
      $dataNo = array(
        'name'          => 'newsletter',
        'id'            => 'newsletter',
        'value'         => 'NO',
        'checked'       => FALSE,
        'style'         => 'margin:10px'
);
?>
         <p> Yes</p>
<?php echo form_radio($dataYes); ?>
<p> No</p>
      <?php   echo form_radio($dataNo);
         ?>-->
       <h1> The Debt Advisory Tool <br> Personal Insolvency Tool Step 2. </h1>
     <h2>Are you a Social Welfare Recipient?</h2>
	<table class = "incomeTable" border="2" align="center">
		<th width="200">YES</th>
        <th width="200">NO</th>
        
        <?php 
			echo "<tr>";
			    
                echo "<td class = \"cellA\" width=\"300\" height = \"300\"> <a href=\"$base/User/socialWelfareYes/". "\">YES</a> </td>";
                echo "<td class = \"cellB\" width=\"300\" height = \"300\"> <a href=\"$base/User/socialWelfareNo/". "\">NO</a> </td>";
                
         	    echo "</tr>"; 
		?>
    </table>         
   
 <!--   <div class="field form-inline radio">
  <label class="radio" type = "radio" name = "socialWelfare" for="socialWelFare">Preferred Method of Contact</label>
  <input class="radio" type="radio" name="socialWelfare" value="YES" checked /> <span>YES - I receive Social Welfare</span>
  <input class="radio" type="radio" name="socialWelfare" value="NO" /> <span>NO - I do NOT receive Social Welfare</span>
</div> -->

 
 <!--   <input class="submit" type="submit" name="submit" value="Submit Form"> -->

</form>
</div>
<?php
$this->load->view('footer'); 
?>