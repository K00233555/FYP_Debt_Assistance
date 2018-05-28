<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$n = $this->session->userdata('AllNoticeData');

if(!$n==null){ ?>

<div class= "review">
 <!--   <div class= "aboutUs">
 <div class ="aboutUsTitle">Glossary </div>
    <p>Main terms used on this page </p>
    <h2>Bankruptcy</h2>
    <p>Bankruptcy is a High Court order that says you cannot pay your debts. In most cases, once you have been made bankrupt, an official (or “Official Assignee”) takes control of your money, property and any deals you have with your creditors. </p>
       <h2>Income</h2>
    <p>Money coming in, for example: wages, social welfare payments, rental income and payments from children </p> </div> -->
 <div class = "iframeDiv">   
<iframe width="560" height="315" src="https://www.youtube.com/embed/e_dBXOlaxsk" frameborder="2" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>
<h1> The Debt Advisory Tool</h1>
    
    <p>Worried about the prospect of bankruptcy? Not knowing where to turn? Here at DACS we can give you advice. We do realise that it can be intimidating talking to someone about this, but it is needed to be done. We want to start the conversation in a courteous, respectful manner, giving you the chance to explain your situation in a non-pressurised setting. The vast majority of Irish people are unaware of the new legislation ,  which has brought in the notion of Personal Insolvency, which allows for a person in debt to get increased protection (click <a href="https://www.mabs.ie/downloads/publications/15_11_20_Personal_insolvency_WEB.pdf" target ="_blank">here for more information</a>). </p>
    <p>
    There are now three new statuses that a person in debt can apply for in order to ensure that they can continue earning under the <a href="http://www.irishstatutebook.ie/eli/2012/act/44/enacted/en/html" target = "_blank">Personal Insolvency Act 2012</a>. These are:   </p>
        <ul>
    <li>Debt Relief Notice</li>
    <li>Personal Insolvency Arrangement</li>
    <li>Debt Settlement Arrangement</li>
    </ul>
    
    <p>There is no doubt that this information is daunting to go through and that is why we have devised the Debt Advisory Tool to simplify the process for you. It is intended to: </p>
    <ol>
    <li>Ascertain which of the three options are applicable to you.</li>
    <li>Arrange an appointment with an expert in that specific area to futher discuss your options.</li>
    </ol>
    <h2>IMPORTANT</h2>
    <p>It is important to point out that this tool will only give an approximation of your status and is not to be seen as a binding ruling. The more important point of this process is that you are aware of the possibile courses of action and are put in contact with someone who can advise you. </p>
  

    <div class = "incomeMenu">
        <h1> The Debt Advisory Tool Personal Insolvency Tool Step 1.</h1>
     <h2> Click on your approximate current level of Yearly Income</h2>
	<table class = "incomeTable" border="2" align="center">
		<th width="200">Less than €20000</th>
        <th width="200">More than €20000 <br> but less than €35000</th>
        <th width="200">Greater than €35000</th>
        <?php 
			echo "<tr>";
			    
                echo "<td class = \"cellA\" width=\"200\" height=\"200\"> <a href=\"$base/User/incomeDecisionLowIncome/". "\"> LESS THAN €20k</a> </td>";
                echo "<td class = \"cellB\" width=\"200\" height=\"200\"> <a href=\"$base/User/incomeDecisionLess/". "\">BETWEEN €20k AND €35k </a> </td>";
                echo "<td class = \"cellC\" width=\"200\" height=\"200\"> <a href=\"$base/User/incomeDecisionGreater/". "\"> GREATER THAN €35k</a> </td>";
         	    echo "</tr>"; 
		?>
    </table>
        
 
<?php } ?>                
<h1> Links to other  Helpful Agencies </h1>
 </div> 

<?php
    $this->load->view('linksFooter');
?>

<?php
$this->load->view('footer'); 
?>

</div>


