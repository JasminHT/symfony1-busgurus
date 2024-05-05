<?php use_helper('Date','Text','I18N') ?>
  <div id='page-header'>
      <img src="/busgurus/images/ICON_Library.png">
      <?php if ($sf_user->getCulture() == 'en') { ?>
      <h1><strong>HR </strong>Library</h1>
      <?php } else { ?>
      <h1>Biblioth&egrave;que des <strong>RH</strong></h1>
      <?php } ?>
  </div>
<div id="leftContentContainer">
  <?php  //include_component('resources', 'leftMenuCategories', array('currentBaseCategoryId' => $currentBaseCategoryId)) ?>
  <?php //include_component('search', 'form') ?>
</div>
<div id="mainResultsContainer" class="rounded">
  <div id="resultsPadding">
    <div id="recordContainer" class="rounded" >
      <div id="recordPanel">    
	<h1><?php echo __('Submit an HR Resource') ?></h1>  
        <?php if($sf_user->getCulture() == "en") { ?>
            <p>Please use the form below to recommend a resource for the BusGurus HR Library. Submitted resources can take two to three weeks for review.</p>

        <?php  }else{?>
            <p>S&rsquo;il vous pla&icirc;t utiliser le formulaire ci-dessous pour recommander une ressource en RH pour la librairie de gouroudelautobus. Les ressources soumises peuvent prendre de deux &agrave; trois semaines pour une r&eacute;vision.</p>
         <?php }?>
         
     <form action="<?php echo url_for('resources/submit') ?>" method="POST">
        <?php if($formHasErrors == true) {
			echo "&nbsp;<ul class='error_list'><li>".__('There were errors processing the form see errors below')."</li></ul><br>&nbsp;";
	    }?>
        <table width="100%" class="resourceForm">
			 <tr><td colspan="2" class="formHelp"><?php echo __('What language is this resource available in') ?></td></tr>
  				<?php echo $form['en']->renderRow() ?>
                                <?php echo $form['fr']->renderRow() ?>
			 <tr><td colspan="2" class="formHelp"><?php echo __('General resource information - please provide both languages if availble') ?></td></tr>
                <?php echo $form['title_en']->renderRow() ?>                    
                <?php echo $form['title_fr']->renderRow() ?>                    
                <?php echo $form['pub_type']->renderRow() ?>                    
                <?php echo $form['pub_format']->renderRow() ?>                    
                <?php echo $form['url_en']->renderRow() ?>
                <?php echo $form['url_fr']->renderRow() ?>
                <?php echo $form['organization_en']->renderRow() ?>                    
                <?php echo $form['organization_fr']->renderRow() ?>                     	 	  	  	  
                <?php echo $form['description_en']->renderRow() ?>                    	    	 	  	  	  	  
                <?php echo $form['description_fr']->renderRow() ?>  
			 <tr><td colspan="2"  class="formHelp"><?php echo __('If the resource is a publication please provide the following details') ?></td></tr>                                   	  	  	  	  	  
                <?php echo $form['author']->renderRow() ?>                    
                <?php echo $form['publisher']->renderRow() ?>                     
                <?php echo $form['pub_date']->renderRow() ?>                    
                <?php echo $form['pub_place']->renderRow() ?>                    
                <?php echo $form['country']->renderRow() ?>                    
                <?php echo $form['series']->renderRow() ?>                    
                <?php echo $form['isbn']->renderRow() ?>    
			 <tr><td colspan="2" class="formHelp"><?php echo __('Your contact details') ?> <span class="smlText">(<?php echo __('encase of errors when processing resource') ?>)</span></td></tr>
                <?php echo $form['first_name']->renderRow() ?>                      		  
                <?php echo $form['last_name']->renderRow() ?>                      	  
                <?php echo $form['email']->renderRow() ?>                    
                <?php echo $form['phone']->renderRow() ?>

			 <tr>
			 <tr><td colspan="2"><hr /></td></tr>
                <?php echo $form['captcha']->renderRow() ?>
                          <tr>
            <td colspan="2" class="formHelp" align="center"><input type="submit" value="<?php echo __('Submit') ?>"  />
            </td>
          </tr>
        </table>
      </form>    </div>
    </div>
  </div>
</div>
