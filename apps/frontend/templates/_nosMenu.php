<?php if($culture == "en") { ?>
<h2>Resources</h2>
<ul  id="leftSubMenu">
  <li class="mainHeader"><?php echo link_to("NOS Bus Operator (PDF)","/busgurus/media/pdf/NOS_OPERATOR_2022_EN.pdf","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("Online Training Self-Assessment","http://tsa.buscouncil.ca/","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("NOS Bus Operator Training Instructor (PDF)","/busgurus/media/pdf/NOS_INSTRUCTOR_2019_EN.pdf","target='_blank'");?></li>
</ul>
&nbsp;<br class="clearFloat" clear="all"/>&nbsp;  
<?php }else { ?>
<h2>Ressources</h2>
<ul  id="leftSubMenu">
  <li class="mainHeader"><?php echo link_to("NPN Conducteur / conductrice d'autobus (PDF)","/busgurus/media/pdf/NOS_OPERATOR_2022_FR.pdf","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("Outil en ligne d'auto-&eacute;valuation","http://tsa.buscouncil.ca/","target='_blank'");?></li>
  <li class="mainHeader"><?php echo link_to("NPN Formateur de conducteurs d'autobus (PDF)","/busgurus/media/pdf/NOS_INSTRUCTOR_2019_FR.pdf","target='_blank'");?></li>
</ul>
&nbsp;<br class="clearFloat" clear="all"/>&nbsp;  
<?php } ?>
