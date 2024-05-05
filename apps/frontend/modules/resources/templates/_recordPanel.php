<div id="recordPanel">
    <div id="recordThumbLink">
        <?php echo image_tag($sf_user->getCulture()."/resource-title.jpg","width=140 height=33 alt=".__('Resource').""); ?>
        <?php if($sf_user->getCulture() == "en" && $hrResource->getThumbnailEn()) { echo "<img src='/uploads/resources/thumbnail/".$hrResource->getThumbnailEn()."' alt=\"".$hrResource->getTitleEn()."\">"; } ?>
        <?php if($sf_user->getCulture() == "fr" && $hrResource->getThumbnailFr()) { echo "<img src='/uploads/resources/thumbnail/".$hrResource->getThumbnailFr()."' alt=\"".$hrResource->getTitleFr()."\">"; } ?><br />
        <?php if(!$hrResource->getThumbnailEn() && !$hrResource->getThumbnailFr()) { echo "<img src='/busgurus/images/resource-default-img.jpg' alt='".__('Resource Thumbnail')."' width='100' height='130' />"; } ?><br />
        <?php if($sf_user->getCulture() == "en" && $hrResource->getUrlEn()) {echo link_to('<span class="text">'.__('Open Resource').'</span>','@resourceClick?id='.$hrResource->getId().'&sf_culture='.$sf_user->getCulture(), "class='resourceBtn rounded' target='_blank' alt='".__('Open Resource')."' title='".$hrResource->getId()."-".$hrResource->getTitleEn()."'");} ?>
        <?php if($sf_user->getCulture() == "fr" && $hrResource->getUrlFr()) {echo link_to('<span class="text">'.__('Open Resource').'</span>','@resourceClick?id='.$hrResource->getId().'&sf_culture='.$sf_user->getCulture(), "class='resourceBtn rounded' target='_blank' alt='".__('Open Resource')."' title='".$hrResource->getId()."-".$hrResource->getTitleFr()."'");} ?>
        <?php if($sf_user->getCulture() == "fr" && !$hrResource->getUrlFr() && $hrResource->getUrlEn()) { echo link_to('<span class="text">'.__('Open Resource').'</span>','@resourceClick?id='.$hrResource->getId().'&sf_culture=en', "class='resourceBtn rounded' target='_blank' alt='".__('Open Resource')."' title='".$hrResource->getId()."-".$hrResource->getTitleFr()."'");} ?>
        <?php if($sf_user->getCulture() == "en" && $hrResource->getFr() == 1 && $hrResource->getUrlFr()) { echo  link_to('<span class="smlText">(french version)</span>' ,'@resourceClick?id='.$hrResource->getId().'&sf_culture=fr', "target='_blank' title='".$hrResource->getTitleFr()."'");} ?>
        <?php if($sf_user->getCulture() == "fr" && $hrResource->getEn() == 1 && $hrResource->getUrlFr()) { echo  link_to('<span class="smlText">(Version Anglaise)</span>' ,'@resourceClick?id='.$hrResource->getId().'&sf_culture=en', "target='_blank' title='".$hrResource->getTitleFr()."'");} ?>
    </div>
    <div id="recordDetails">
        <h3 class="rounded"><?php echo($sf_user->getCulture() == "en") ?  $hrResource->getTitleEn(): $hrResource->getTitleFr();?></h3><br />        
        <?php echo "<label>".__('Language(s): ')."</label> " ?>
            <?php if($sf_request->getParameter('sf_culture') == "en"){ ?>
                <?php if($hrResource->getEn() == 1 && $hrResource->getUrlEn()) { echo __('(en)') ;} ?>
                <?php if($hrResource->getFr() == 1 && $hrResource->getUrlFr() ) { echo __('(fr)') ;} ?>
            <?php }else{ ?>
                <?php if($hrResource->getFr() == 1 && $hrResource->getUrlFr() ) { echo __('(fr)') ;} ?>
                <?php if($hrResource->getEn() == 1 && $hrResource->getUrlEn() ) { echo __('(en)') ;} ?>
            <?php } ?>
        <br />
        <?php echo "<label>".__('Format: ')."</label>".$hrResource->getPubFormat() ?><br />
        <?php if($hrResource->getAuthor()) { echo "<label>".__('Author: ')."</label>".$hrResource->getAuthor()."<br />";} ?>
        <?php if($sf_user->getCulture() == "en" && $hrResource->getOrganizationEn()) { echo "<label>".__('Organization: ')."</label>".$hrResource->getOrganizationEn();} ?>
        <?php if($sf_user->getCulture() == "fr" && $hrResource->getOrganizationFr()) { echo "<label>".__('Organization: ')."</label>".$hrResource->getOrganizationFr();} ?><br />
        <?php //if($hrResource->getUrl()){ echo link_to(''.__('(click to open)'),'@resourceClick?id='.$hrResource->getId().'?&sf_culture='.$sf_user->getCulture().'&ulr='.$hrResource->getUrl(), "target='blank' title='".__('Open URL')."'");} ?>
        <?php if($hrResource->getPubType() == "publication") { ?>
            <?php if($hrResource->getPublisher()) { echo "<label>".__('Publisher: ')."</label>".$hrResource->getPublisher()."<br />";} ?>
            <?php if($hrResource->getPubDate()) { echo "<label>".__('Date Published: ')."</label>".format_date($hrResource->getPubDate())."<br />";} ?>
            <?php if($hrResource->getCountry()) { echo "<label>".__('Country: ')."</label>".$hrResource->getCountry()."<br />";} ?>
            <?php if($hrResource->getSeries()) { echo "<label>".__('Series: ')."</label>".$hrResource->getSeries()."<br />";} ?>
            <?php if($hrResource->getIsbn()) { echo "<label>".__('ISBN: ')."</label>".$hrResource->getIsbn()."<br />";} ?>
        <?php } ?>
        <br />
        <?php echo ($sf_user->getCulture() == "en") ?  $hrResource->getDescriptionEn(): $hrResource->getDescriptionFr();?><br />
        <br />&nbsp;<br />
        <div class="subDetails rounded">
        <?php echo __('Created: ').format_date($hrResource->getCreatedAt()) ?><br />
        <?php echo __('Updated: ').format_date($hrResource->getUpdatedAt()) ?><br />
        <?php
        if($keywords){
            echo __('Keywords: ');            
            foreach ($keywords as $keyword):
                if($sf_user->getCulture() == "en") {
                    echo $keyword->getKeywordEn().", ";
                }else {
                    echo $keyword->getKeywordFr().", ";
                }
            endforeach;
        }
        ?>
        </div>        
        <br class="clearFloat" clear="all" />
    </div>
</div>