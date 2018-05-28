<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$img_base = base_url();
$n = $this->session->userdata('AllNoticeData');

if(!$n==null){ ?>


 


<?php } ?>   
<div class= "review">

      <!--  <a href="https://www.mabs.ie/downloads/publications/15_11_20_Personal_insolvency_WEB.pdf" target ="_blank">here for more information</a> -->
        <h1> Useful Links</h1>
     <h2> Glossary of Terms</h2>
    <ul>
        
    <li> <a href="https://www.mabs.ie/en/publications/glossary/a.html" target="_blank">MABS Glossary</a></li>
    </ul>
    <h2> Personal Insolvency</h2>
    <ul>
    <li> <a href="http://www.irishstatutebook.ie/eli/2012/act/44/enacted/en/html" target="_blank">Terms of the Personal Insolvency Ast, 2012</a> </li>
        
    <li> <a href="https://www.mabs.ie/downloads/publications/15_11_20_Personal_insolvency_WEB.pdf " target="_blank">MABS Guide to Personal Insolvency Act, 2012</a></li>
       
    
        
    
    </ul>
<h1> Links to other  Helpful Agencies </h1>
<?php
    $this->load->view('linksFooter');
?>

<?php
$this->load->view('footer'); 
?>

</div>


