



<?php if($culture == "en"){ ?>
<ul  id="leftSubMenu">
  
  <li class="mainHeader"><?php echo link_to("Welcome","@sf_cms_show?slug=wheel&sf_culture=".$sf_user->getCulture());?></li>
  
  <?php if(preg_match('/wheel-intro/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Introduction","@sf_cms_show?slug=wheel-intro&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-intro/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-intro/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Behind The Wheel","@sf_cms_show?slug=wheel-intro-wheel&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("The Importance of Seeing Recruitment as a Process","@sf_cms_show?slug=wheel-intro-recruitment&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/wheel-planning/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Planning","@sf_cms_show?slug=wheel-planning&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-planning/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-planning/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Where to Start","@sf_cms_show?slug=wheel-planning&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("The Importance of Values","@sf_cms_show?slug=wheel-planning-values&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("The Planning Process","@sf_cms_show?slug=wheel-planning-process&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Planning Tools","@sf_cms_show?slug=wheel-planning-tool&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Comments","@sf_cms_show?slug=wheel-planning-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-recruitment/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Recruitment","@sf_cms_show?slug=wheel-recruitment&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-recruitment/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-recruitment/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Objective","@sf_cms_show?slug=wheel-recruitment&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Key Elements of Successful Recruitment","@sf_cms_show?slug=wheel-recruitment-elements&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Sources - Advantages and Disadvantages","@sf_cms_show?slug=wheel-recruitment-sources&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("The Legal Realities","@sf_cms_show?slug=wheel-recruitment-legal&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Candidate Information Management System","@sf_cms_show?slug=wheel-recruitment-candidate&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Some Innovative Approaches","@sf_cms_show?slug=wheel-recruitment-approaches&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Comments","@sf_cms_show?slug=wheel-recruitment-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/wheel-selection/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Selection","@sf_cms_show?slug=wheel-selection&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-selection/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-selection/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Objective","@sf_cms_show?slug=wheel-selection&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("The Concept of Validity","@sf_cms_show?slug=wheel-selection-validity&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Legal Defensibility","@sf_cms_show?slug=wheel-selection-defensibility&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Other Considerations","@sf_cms_show?slug=wheel-selection-considerations&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("A Comparison of Selection Methods - Research and Reality","@sf_cms_show?slug=wheel-selection-methods&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Background Review","@sf_cms_show?slug=wheel-selection-background&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Tests","@sf_cms_show?slug=wheel-selection-tests&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Interviewing","@sf_cms_show?slug=wheel-selection-interviewing&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Comments","@sf_cms_show?slug=wheel-selection-comment&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-hiring/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Hiring","@sf_cms_show?slug=wheel-hiring&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-hiring/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-hiring/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Objective","@sf_cms_show?slug=wheel-hiring&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Terms and Conditions of Employment","@sf_cms_show?slug=wheel-hiring-terms&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("The Employment Letter","@sf_cms_show?slug=wheel-hiring-letter&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Hiring and Orientation","@sf_cms_show?slug=wheel-hiring-orientation&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Post Hiring Background Review and Tests","@sf_cms_show?slug=wheel-hiring-background&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Comments","@sf_cms_show?slug=wheel-hiring-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-orientation/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Orientation","@sf_cms_show?slug=wheel-orientation&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-orientation/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-orientation/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Objective","@sf_cms_show?slug=wheel-orientation&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Key Ingredients of Successful Employee Orientation","@sf_cms_show?slug=wheel-orientation-keys&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Comments","@sf_cms_show?slug=wheel-orientation-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-workbook/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Workbook","@sf_cms_show?slug=wheel-workbook&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-workbook/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-synopsis/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Research Synopsis","@sf_cms_show?slug=wheel-synopsis&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-synopsis/',$slug)) { echo "</span>"; } ?>
</ul>




<?php }else{ ?>




<ul  id="leftSubMenu">
  
  <li class="mainHeader"><?php echo link_to("Bienvenue","@sf_cms_show?slug=wheel&sf_culture=".$sf_user->getCulture());?></li>
  
  <?php if(preg_match('/wheel-intro/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("L'introduction","@sf_cms_show?slug=wheel-intro&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-intro/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-intro/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Au Volant","@sf_cms_show?slug=wheel-intro-wheel&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("L'importance du processus","@sf_cms_show?slug=wheel-intro-recruitment&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-planning/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("La planification","@sf_cms_show?slug=wheel-planning&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-planning/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-planning/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("Le commencement","@sf_cms_show?slug=wheel-planning&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("L'importance des valeurs","@sf_cms_show?slug=wheel-planning-values&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Le processus de planification","@sf_cms_show?slug=wheel-planning-process&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Les outils de planification","@sf_cms_show?slug=wheel-planning-tool&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Commentaires","@sf_cms_show?slug=wheel-planning-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-recruitment/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Le recrutement","@sf_cms_show?slug=wheel-recruitment&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-recruitment/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-recruitment/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("L'objectif","@sf_cms_show?slug=wheel-recruitment&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Les &eacute;l&eacute;ments cl&eacute;s d'un recrutement r&eacute;ussi","@sf_cms_show?slug=wheel-recruitment-elements&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Sources - les avantages et les inconv&eacute;nients","@sf_cms_show?slug=wheel-recruitment-sources&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Les r&eacute;alit&eacute;s juridiques","@sf_cms_show?slug=wheel-recruitment-legal&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Le syst&egrave;me de gestion de l'information sur les candidats","@sf_cms_show?slug=wheel-recruitment-candidate&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Quelques approches innovatrices","@sf_cms_show?slug=wheel-recruitment-approaches&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Commentaires","@sf_cms_show?slug=wheel-recruitment-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-selection/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("La s&eacute;lection","@sf_cms_show?slug=wheel-selection&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-selection/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-selection/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("L'objectif","@sf_cms_show?slug=wheel-selection&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Le concept de validit&eacute;","@sf_cms_show?slug=wheel-selection-validity&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Le caract&egrave;re d&eacute;fendable","@sf_cms_show?slug=wheel-selection-defensibility&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Les autres consid&eacute;rations","@sf_cms_show?slug=wheel-selection-considerations&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Une comparaison des m&eacute;thodes de s&eacute;lection - la recherche et la r&eacute;alit&eacute;","@sf_cms_show?slug=wheel-selection-methods&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("La v&eacute;rification des ant&eacute;c&eacute;dents","@sf_cms_show?slug=wheel-selection-background&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Les &eacute;preuves","@sf_cms_show?slug=wheel-selection-tests&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("L'art d'interviewer","@sf_cms_show?slug=wheel-selection-interviewing&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Commentaires","@sf_cms_show?slug=wheel-selection-comment&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-hiring/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("L'embauche","@sf_cms_show?slug=wheel-hiring&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-hiring/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-hiring/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("L'objectif","@sf_cms_show?slug=wheel-hiring&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Les conditions d'emploi","@sf_cms_show?slug=wheel-hiring-terms&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("La lettre d'offre d'emploi ou le contrat","@sf_cms_show?slug=wheel-hiring-letter&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("L'embauche et l'orientation","@sf_cms_show?slug=wheel-hiring-orientation&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("La v&eacute;rification des ant&eacute;c&eacute;dents et les tests apr&egrave;s-embauche","@sf_cms_show?slug=wheel-hiring-background&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Commentaires","@sf_cms_show?slug=wheel-hiring-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/wheel-orientation/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("L'accueil et l'orientation","@sf_cms_show?slug=wheel-orientation&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-orientation/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-orientation/',$slug)){ ?>
  <ul class="subLinks">
    <li><?php echo link_to("L'objectif","@sf_cms_show?slug=wheel-orientation&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("La cl&eacute; de la r&eacute;ussite de l'orientation","@sf_cms_show?slug=wheel-orientation-keys&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Commentaires","@sf_cms_show?slug=wheel-orientation-comments&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>
  
  <?php if(preg_match('/wheel-workbook/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Le cahier d'exercices","@sf_cms_show?slug=wheel-workbook&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-workbook/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/wheel-synopsis/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("La synth&egrave;se sur la recherche","@sf_cms_show?slug=wheel-synopsis&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/wheel-synopsis/',$slug)) { echo "</span>"; } ?>

</ul>
<?php } ?>


<?php echo link_to(image_tag($sf_user->getCulture().'/onboard-resources-btn.png', "width=180 height=38  alt=". __('View All Resource')),"@sf_cms_show?slug=wheel-resources&sf_culture=".$sf_user->getCulture());?> 
<br class="clearFloat" clear="all"/>
