<?php   if($sf_user->getCulture() == "en"){ ?>
    <link rel="alternate" type="application/rss+xml" title="BusGurus Feed" href="/busgurus/en/feed" />
<?php }else{ ?>
    <link rel="alternate" type="application/rss+xml" title="BusGurus Feed" href="/busgurus/fr/feed" />
<?php } ?>