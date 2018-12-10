<?php echo use_helper('sfSimpleCMS') ?>
<!-- ENGLISH PART -->
<?php if($culture == "en") { ?>
  
  <div id='onboard-header' title=<?php echo "'".$slug."'" ?> >
    <h2>The Keys to your HR Plan :</h2>
    <form id='onboard-links'>
      <label>
        <input type="radio" name="onboard" value="O">
        <div id="onboard-opportunity" class='onboard-link link1' title='Opportunity and Welcome' >
          <?php echo link_to("O","@sf_cms_show?slug=onboard&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="N">
        <div id="onboard-needs" class='onboard-link link2'  title='Needs Assessment' >
          <?php echo link_to("N","@sf_cms_show?slug=onboard-needs&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="B">
        <div id="onboard-image" class='onboard-link link3'  title='Behaviour and Image'>
          <?php echo link_to("B","@sf_cms_show?slug=onboard-image&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="O">
        <div id="onboard-optimize" class='onboard-link link4' title='Optimizing your Workforce'>
          <?php echo link_to("O","@sf_cms_show?slug=onboard-optimize&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="A">
        <div id="onboard-attracting" class='onboard-link link5' title='Attracting and Retaining'>
          <?php echo link_to("A","@sf_cms_show?slug=onboard-attracting&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="R">
        <div id="onboard-recruitment" class='onboard-link link6' title='Recruitment and Selection'>
          <?php echo link_to("R","@sf_cms_show?slug=onboard-recruitment&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="D">
        <div id="onboard-development" class='onboard-link link7' title="Development">
          <?php echo link_to("D","@sf_cms_show?slug=onboard-development&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
    </form>
    <a id='current-text' href="" style="visibility: visible;" >Opportunity and Welcome</a>
    <a id='more' href="" style="visibility: hidden;">Learn more ></a>

    <div class='additional-links'><?php echo link_to('Additional Links',"@sf_cms_show?slug=onboard-links&sf_culture=".$sf_user->getCulture());?></div>
    <div class='all-resources'><?php echo link_to('View All Resources',"@sf_cms_show?slug=onboard-resources&sf_culture=".$sf_user->getCulture());?></div>
    
  </div>  

<!--FRENCH PART -->
<?php } else { ?> 

  <div id='onboard-header' title=<?php echo "'".$slug."'" ?> >
    <h2>Les Cl&eacute;s de votre plan RH :</h2>
    <form id='onboard-links'>
      <label>
        <input type="radio" name="onboard" value="A">
        <div id="onboard-opportunity" class='onboard-link link1' title='Accueil' >
          <?php echo link_to("A","@sf_cms_show?slug=onboard&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="B">
        <div id="onboard-image" class='onboard-link link2'  title="But - Image de l'industrie" >
          <?php echo link_to("B","@sf_cms_show?slug=onboard-image&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="O">
        <div id="onboard-optimize" class='onboard-link link3'  title='Optimization de vos effectifs'>
          <?php echo link_to("O","@sf_cms_show?slug=onboard-optimize&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="R">
        <div id="onboard-recruitment" class='onboard-link link4' title='Recrutement et s&eacute;lection'>
          <?php echo link_to("R","@sf_cms_show?slug=onboard-recruitment&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="D">
        <div id="onboard-development" class='onboard-link link5' title='D&eacute;veloppement'>
          <?php echo link_to("D","@sf_cms_show?slug=onboard-development&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="E">
        <div id="onboard-needs" class='onboard-link link6' title='&Eacute;valuation des besoins'>
          <?php echo link_to("E","@sf_cms_show?slug=onboard-needs&sf_culture=".$sf_user->getCulture());?>
        </div>
      </label>
      <label>
        <input type="radio" name="onboard" value="R">
        <div id="onboard-attracting" class='onboard-link link7' title="R&eacute;tention et  fid&eacute;lisation">
          <?php echo link_to("R","@sf_cms_show?slug=onboard-attracting&sf_culture=".$sf_user->getCulture());?>
          
        </div>
      </label>
    </form>
    <a id='current-text' href="" style="visibility: visible;" >Attraction</a>
    <a id='more' href="" style="visibility: hidden;">En savoir plus ></a>

    <div class='additional-links'><?php echo link_to('Liens',"@sf_cms_show?slug=onboard-links&sf_culture=".$sf_user->getCulture());?></div>
    <div class='all-resources'><?php echo link_to('Toutes les ressources',"@sf_cms_show?slug=onboard-resources&sf_culture=".$sf_user->getCulture());?></div>
    
  </div> 


<?php } ?>



<!-- SCRIPT PART, ALWAYS INCLUDED -->
<script type="text/javascript">

  //Selects a letter on the OnBoard menu
  var check_letter = function(letter) {
    if (letter) {
      var this_input = letter.getElementsByTagName('input')[0];
      this_input.checked = true;
    } 
  }

  //Changes the main title link
  var set_page_header = function(letter) {
    if (letter) {
      //change the page header
      var text_link = document.getElementById('current-text');
      var new_title = letter.getElementsByTagName('div')[0].title; //alt
      var new_link =  letter.getElementsByTagName('div')[0].getElementsByTagName('a')[0].href; //href

      text_link.innerHTML = new_title;
      text_link.href = new_link;

      //change the more link
      var more_link = document.getElementById('more');
      more_link.href = new_link;
    }
  }

  var sub_slug = function(slug) {
    return slug.substring(0,slug.lastIndexOf("-"));
  }
  var reset_page_header = function() {
    //identify current page
    var current_page_letter = false;
    var potential_letter;
    var slug = document.getElementById('onboard-header').title;
    var i=0;

    //set the default letter
    current_page_letter = document.getElementById('onboard-opportunity').parentNode;
    
    //cut down the slug until you identify which letter you are on
    while (slug !== 'onboard' && i < 5) {
      //try to find an element named slug
      potential_letter = document.getElementById(slug);
      //if it exists, that is your letter
      if (potential_letter) {
        current_page_letter = potential_letter.parentNode;
      }
      //then cut down the slug and try again
      slug = sub_slug(slug);
      i++;
    }

    //set the input active for the original letter
    check_letter(current_page_letter);

    //unchange the header text
    set_page_header(current_page_letter);

    //hide the MORE link    
    document.getElementById('more').style.visibility = 'hidden';
    document.getElementById('current-text').style.backgroundColor = '#444';
  }

  //After loading: add mouse events
  window.onload = function(){
    
    //Page loads: reset header
    reset_page_header();
    
    //Add hover action on each Letter
    var letters = document.getElementById('onboard-links').getElementsByTagName('label');
    for (var i=0;i<letters.length;i++) {
      letters[i].addEventListener("mouseover", function( event )
      {
        //set this input active
        check_letter(this); //this letter being hovered

        //change the header link
        set_page_header(this); //this letter being hovered

        //show the MORE link
        document.getElementById('more').style.visibility = 'visible';
        document.getElementById('current-text').style.backgroundColor = '#555';

        
      }, false);
    }

    //Mouse leaves the Header: reset header
    document.getElementById('onboard-header').addEventListener("mouseleave", function(){
      reset_page_header();
    }, false);
  }
</script>
