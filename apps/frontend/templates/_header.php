<?php use_helper('I18N', 'I18nUrl') ?>


<?php if($culture == "en") { ?>
<ul id="mainNav"> 
    <li id='mainNav-library'><?php echo link_to("<div></div>Library","@hrLibrary?sf_culture=".$sf_user->getCulture());?></li>
    <li id='mainNav-onboard'><?php echo link_to("<div></div>On board","sfSimpleCMS/show?slug=onboard&sf_culture=".$sf_user->getCulture());?></li>
    <li id='mainNav-tools'><?php echo link_to("<div></div>Tools","@tools?sf_culture=".$sf_user->getCulture());?></li>
    <li id='mainNav-search'><?php echo link_to("<div></div>Search","@search?sf_culture=".$sf_user->getCulture());?></li>
</ul>
<?php }else { ?> <!--fr-->
<ul id="mainNav"> 
    <li id='mainNav-library'><?php echo link_to('<div></div>Biblioth&egrave;que',"@hrLibrary?sf_culture=".$sf_user->getCulture());?></li>
    <li id='mainNav-onboard'><?php echo link_to('<div></div>Aborder',"sfSimpleCMS/show?slug=onboard&sf_culture=".$sf_user->getCulture());?></li>
    <li id='mainNav-tools'><?php echo link_to('<div></div>Outils',"@tools?sf_culture=".$sf_user->getCulture());?></li>
    <li id='mainNav-search'><?php echo link_to('<div></div>Recherche',"@search?sf_culture=".$sf_user->getCulture());?></li>
</ul>
<?php } ?>
