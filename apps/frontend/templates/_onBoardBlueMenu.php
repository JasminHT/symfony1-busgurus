
<?php if($culture == "en"){ ?>

  <div class='onboard-header'>
    <h1>HR <strong>OnBoard</strong></h1>
    <h2>The Keys to your HR Plan</h2>
  </div>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard">Opportunity and Welcome   </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-needs">Needs Assessment   </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-image">Behaviour and Image  </a>          
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-optimize">Optimizing your Workforce </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-attracting">Attracting and Retaining  </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-recruitment">Recruitment and Selection  </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-development">Development   </a>

  <?php }else{ ?>
  
  <div class='onboard-header'>
    <h1><strong>Aborder</strong> les RH</h1>
    <h2></h2>
  </div>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-attracting">Attraction  </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-image">But - Image de l'industrie  </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-optimize">Optimisation de vos effectifs  </a>          
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-recruitment">Recrutement et s&eacute;lection </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-development">D&eacute;veloppement  </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-needs">&Eacute;valuation des besoins  </a>
    <a href="/busgurus/<?php echo $sf_user->getCulture(); ?>/page/onboard-retaining-retention">R&eacute;tention et  fid&eacute;lisation  </a>

  <?php } ?>
  
