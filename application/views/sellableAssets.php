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
       <h1> The Debt Advisory Tool <br> Personal Insolvency Tool Step 3. </h1>
     <h2>Sellable Assets - Do you possess assets to offset any debts? <br> What is a Sellable Asset? Click here for more information</h2>
	<table class="incomeTable" border="1" align="center">
		<th width="200">YES</th>
        <th width="200">NO</th>
        
        <?php 
			echo "<tr>";
			    
                echo "<td class = \"cellA\" height=\"300\"width=\"300\"> <a href=\"$base/User/sellableAssetsYes/". "\">YES</a> </td>";
                echo "<td class = \"cellB\" height=\"300\" width=\"300\"> <a href=\"$base/User/sellableAssetsNo/". "\">NO</a> </td>";
                
         	    echo "</tr>"; 
		?>
    </table>         
   
 <!--   <div class="field form-inline radio">
  <label class="radio" type = "radio" name = "socialWelfare" for="socialWelFare">Preferred Method of Contact</label>
  <input class="radio" type="radio" name="socialWelfare" value="YES" checked /> <span>YES - I receive Social Welfare</span>
  <input class="radio" type="radio" name="socialWelfare" value="NO" /> <span>NO - I do NOT receive Social Welfare</span>
</div> -->

 
 <!--   <input class="submit" type="submit" name="submit" value="Submit Form"> -->
    <h2>Links to other helpful agencies</h2>

<?php
    $this->load->view('linksFooter');
$this->load->view('footer'); 
?>

</div>
