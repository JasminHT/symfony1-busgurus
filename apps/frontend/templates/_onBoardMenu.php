<?php if($culture == "en") { ?>

<ul  id="leftSubMenu">
  <h1>OnBoard Links </h1>

  <!-- main menu -->

  <li class="mainHeader"><?php echo link_to("Opportunity and Welcome","@sf_cms_show?slug=onboard&sf_culture=".$sf_user->getCulture());?></li>

  <?php if(preg_match('/onboard-needs/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader">
    <?php echo link_to("Needs Assessment","@sf_cms_show?slug=onboard-needs&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-needs/',$slug)) { echo "</span>"; } ?>
  
  <?php if(preg_match('/onboard-image/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Behaviour and Image","@sf_cms_show?slug=onboard-image&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-image/',$slug)) { echo "</span>"; } ?>
  
  <?php if(preg_match('/onboard-optimize/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Optimizing your Workforce","@sf_cms_show?slug=onboard-optimize&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-optimize/',$slug)) { echo "</span>"; } ?>
  
  <?php if(preg_match('/onboard-attracting/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Attracting and Retaining","@sf_cms_show?slug=onboard-attracting&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-attracting/',$slug)) { echo "</span>"; } ?>

    <?php if(preg_match('/onboard-recruitment/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Recruitment and Selection","@sf_cms_show?slug=onboard-recruitment&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-recruitment/',$slug)) { echo "</span>"; } ?>
  
  <?php if(preg_match('/onboard-development/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Development","@sf_cms_show?slug=onboard-development&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-development/',$slug)) { echo "</span>"; } ?>

  <!-- sub menu -->

  <?php if(preg_match('/onboard-needs/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("What is an Employer of Choice (EOC)","@sf_cms_show?slug=onboard-needs&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("EOC  Model","@sf_cms_show?slug=onboard-needs-model&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Role of Leadership","@sf_cms_show?slug=onboard-needs-role&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Operational Excellence Gap Analysis Tool","@sf_cms_show?slug=onboard-needs-gap&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("EOC Strategy","@sf_cms_show?slug=onboard-needs-strategy&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("EOC HR Proficiency Model","@sf_cms_show?slug=onboard-needs-proficiency&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/onboard-optimize/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Managing Talent","@sf_cms_show?slug=onboard-optimize&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Conflict Resolution","@sf_cms_show?slug=onboard-optimize-conflict&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Orientation","@sf_cms_show?slug=onboard-optimize-orientation&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>


  <?php if(preg_match('/onboard-retaining/',$slug) || preg_match('/onboard-attracting/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Workforce planning","@sf_cms_show?slug=onboard-attracting&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Retention strategies","@sf_cms_show?slug=onboard-retaining-retention&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Reward and recognition","@sf_cms_show?slug=onboard-retaining-reward&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Compensation","@sf_cms_show?slug=onboard-retaining-compensation&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Benefits","@sf_cms_show?slug=onboard-retaining-benefits&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/onboard-recruitment/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Recruitment","@sf_cms_show?slug=onboard-recruitment&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Recruitment Sources","@sf_cms_show?slug=onboard-recruitment-sources&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Selection and Hiring","@sf_cms_show?slug=onboard-recruitment-selection&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Interviewing","@sf_cms_show?slug=onboard-recruitment-interview&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/onboard-image/',$slug)) { ?>
    <ul class="subLinks" >
      <li><?php echo link_to("Organizational Behaviour","@sf_cms_show?slug=onboard-image&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Brand Representation","@sf_cms_show?slug=onboard-image-brand&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Customer Intelligence","@sf_cms_show?slug=onboard-image-customer&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Delivery System and Application","@sf_cms_show?slug=onboard-image-delivery&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Relationships and Communications","@sf_cms_show?slug=onboard-image-relationships&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Creativity &amp; Innovation","@sf_cms_show?slug=onboard-image-creativity&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Leadership","@sf_cms_show?slug=onboard-image-leadership&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Learning &amp; Development","@sf_cms_show?slug=onboard-image-learning&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Response to Change","@sf_cms_show?slug=onboard-image-response&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Research &amp; Progress","@sf_cms_show?slug=onboard-image-research&sf_culture=".$sf_user->getCulture());?></li>
    </ul>
    <br class="clearFloat" clear="all"/>
  <?php } ?>
</ul>














<?php }else { ?>














<ul  id="leftSubMenu">

  <!-- main menu -->
  <h1>Aborder Liens</h1>

  <li class="mainHeader"><?php echo link_to("Accueil","@sf_cms_show?slug=onboard&sf_culture=".$sf_user->getCulture());?></li>

  <?php if(preg_match('/onboard-attracting/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Attraction","@sf_cms_show?slug=onboard-attracting&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-attracting/',$slug)) { echo "</span>"; } ?>

  <?php if(preg_match('/onboard-image/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("But - Comportement et image","@sf_cms_show?slug=onboard-image&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-image/',$slug)) { echo "</span>"; } ?>
 
  <?php if(preg_match('/onboard-optimize/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Optimisation de vos effectifs","@sf_cms_show?slug=onboard-optimize&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-optimize/',$slug)) { echo "</span>"; } ?>
 
  <?php if(preg_match('/onboard-recruitment/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("Recrutement et s&eacute;lection","@sf_cms_show?slug=onboard-recruitment&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-recruitment/',$slug)) { echo "</span>"; } ?>
  
  <?php if(preg_match('/onboard-development/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("D&eacute;veloppement","@sf_cms_show?slug=onboard-development&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-development/',$slug)) { echo "</span>"; } ?>
 
  <?php if(preg_match('/onboard-needs/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("&Eacute;valuer les besoins","@sf_cms_show?slug=onboard-needs&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-needs/',$slug)) { echo "</span>"; } ?>
  
  <?php if(preg_match('/onboard-retaining-retention/',$slug)) { echo "<span class='selected-link'>"; } ?>
  <li class="mainHeader"><?php echo link_to("R&eacute;tention et  fid&eacute;lisation","@sf_cms_show?slug=onboard-retaining-retention&sf_culture=".$sf_user->getCulture());?></li>
  <?php if(preg_match('/onboard-retaining-retention/',$slug)) { echo "</span>"; } ?>
  

  <!-- Sub Menu -->

  <?php if(preg_match('/onboard-retaining/',$slug) || preg_match('/onboard-attracting/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Planification des effectifs","@sf_cms_show?slug=onboard-attracting&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Strat&eacute;gies de fid&eacute;lisation","@sf_cms_show?slug=onboard-retaining-retention&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("R&eacute;compense et reconnaissance","@sf_cms_show?slug=onboard-retaining-reward&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("R&eacute;mun&eacute;ration","@sf_cms_show?slug=onboard-retaining-compensation&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Avantages sociaux","@sf_cms_show?slug=onboard-retaining-benefits&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/onboard-optimize/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Gestion du talent","@sf_cms_show?slug=onboard-optimize&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("R&egrave;glement des diff&eacute;rends","@sf_cms_show?slug=onboard-optimize-conflict&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Encadrement","@sf_cms_show?slug=onboard-optimize-orientation&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/onboard-recruitment/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Recrutement","@sf_cms_show?slug=onboard-recruitment&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Sources de recrutement","@sf_cms_show?slug=onboard-recruitment-sources&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("S&eacute;lection et embauche","@sf_cms_show?slug=onboard-recruitment-selection&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Types d&rsquo;entrevue","@sf_cms_show?slug=onboard-recruitment-interview&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php if(preg_match('/onboard-needs/',$slug)) { ?>
    <ul class="subLinks">
      <li><?php echo link_to("Qu&rsquo;est-ce qu&rsquo;un Employeur de choix?","@sf_cms_show?slug=onboard-needs&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Mod&egrave;le d&rsquo;Employeur de choix","@sf_cms_show?slug=onboard-needs-model&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("R&ocirc;le des dirigeants","@sf_cms_show?slug=onboard-needs-role&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Analyse de l&rsquo;&eacute;cart  de l&rsquo;excellence op&eacute;rationnelle","@sf_cms_show?slug=onboard-needs-gap&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Strat&eacute;gie de l&rsquo;Employeur de choix","@sf_cms_show?slug=onboard-needs-strategy&sf_culture=".$sf_user->getCulture());?></li>
      <li><?php echo link_to("Mod&egrave;le de comp&eacute;tences en ressources humaines de l&rsquo;Employeur de choix","@sf_cms_show?slug=onboard-needs-proficiency&sf_culture=".$sf_user->getCulture());?></li>
    </ul>
    <br class="clearFloat" clear="all"/>
  <?php } ?>

  <?php
  if(preg_match('/onboard-image/',$slug)) { ?>
  <ul class="subLinks">
    <li><?php echo link_to("Comportement organisationnel","@sf_cms_show?slug=onboard-image&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Repr&eacute;sentation de la marque","@sf_cms_show?slug=onboard-image-brand&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Renseignements sur les clients","@sf_cms_show?slug=onboard-image-customer&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Syst&egrave;me de prestation et application","@sf_cms_show?slug=onboard-image-delivery&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Rapports avec les personnes et Communications","@sf_cms_show?slug=onboard-image-relationships&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Cr&eacute;ativit&eacute; et innovation","@sf_cms_show?slug=onboard-image-creativity&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Leadership","@sf_cms_show?slug=onboard-image-leadership&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Apprentissage et d&eacute;veloppement","@sf_cms_show?slug=onboard-image-learning&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("R&eacute;ponse au changement","@sf_cms_show?slug=onboard-image-response&sf_culture=".$sf_user->getCulture());?></li>
    <li><?php echo link_to("Recherche et progr&egrave;s","@sf_cms_show?slug=onboard-image-research&sf_culture=".$sf_user->getCulture());?></li>
  </ul>
  <br class="clearFloat" clear="all"/>
  <?php }  ?>

</ul>
<br />
<br class="clearFloat" clear="all"/>&nbsp;
<?php } ?>
