<?php if($culture == "en") { ?>
<h2>Resources</h2>
<ul  id="leftSubMenu">
  <li class="mainHeader"><?php echo link_to("NOS Bus Operator (PDF)","/busgurus/media/pdf/mcpcc_nos_operator_en.pdf","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("Online Training Self-Assessment","http://tsa.buscouncil.ca/","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("NOS Bus Operator Training Instructor (PDF)","/busgurus/media/pdf/mcpcc_nos_instructor_en.pdf","target='_blank'");?></li>
</ul>
&nbsp;<br class="clearFloat" clear="all"/>&nbsp;  
<?php }else { ?>
<h2>Ressources</h2>
<ul  id="leftSubMenu">
  <li class="mainHeader"><?php echo link_to("NPN Conducteur / conductrice d'autobus (PDF)","/busgurus/media/pdf/mcpcc_nos_operator_fr.pdf","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("Outil en ligne d'auto-&eacute;valuation","http://tsa.buscouncil.ca/","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("NPN Formateur de conducteurs d'autobus (PDF)","/busgurus/media/pdf/mcpcc_nos_instructor_fr.pdf","target='_blank'");?></li>
</ul>
&nbsp;<br class="clearFloat" clear="all"/>&nbsp;  
<?php } ?>
