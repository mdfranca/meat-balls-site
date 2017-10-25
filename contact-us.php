
  <!-- header-a -->
  <div id="tm-header-a" class="tm-block-header-a uk-block uk-block-default tm-block-fullwidth tm-grid-collapse ">
    <div class="uk-container uk-container-center">
      <section class="tm-header-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}">

        <div class="uk-width-1-1">
          <div class="uk-panel uk-text-center uk-contrast tm-overlay-secondary tm-header-height">
            <div class="tm-background-cover uk-cover-background uk-flex uk-flex-center uk-flex-middle" style="background-position: 50% 0px; background-image:url(images/background/bg-image-1.jpg)" data-uk-parallax="{bg: '-200'}">
              <div class="uk-position-relative uk-container">

                <div data-uk-parallax="{opacity: '1,0', y: '-50'}">

                  <div data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300}">
                    <h1 class="uk-module-title-alt uk-margin-top">Contato</h1>
                  </div>

                  <div data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:800}">
                    <h5 class="uk-sub-title-small">Got a minute? Talk to us</h5>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- main content -->
  <div id="tm-main" class="tm-block-main uk-block uk-block-default">
    <div class="uk-container uk-container-center">
      <div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
        <div class="tm-main uk-width-medium-1-2">
          <main id="tm-content" class="tm-content">
            <article class="uk-article tm-article">
              <div class="tm-article-wrapper">
                <div class="tm-article-content uk-margin-large-bottom uk-margin-top-remove">
                  <div class="tm-article">
                    <!-- contact form -->
                    <div class="contact">
                      <form id="contact_form" class="uk-form uk-form-stacked">

                        <div id="alert-msg-contact" class="alert-msg uk-margin-bottom"></div>

                        <!-- name field -->
                        <div class="uk-form-row uk-margin-bottom">
                          <label for="name" data-uk-tooltip title="<strong>Name</strong><br />Your name.">Nome<span class="star"> *</span></label>
                          <div class="uk-form-controls">
                            <input type="text" class="uk-width-1-1" name="contact-name" placeholder="" size="30" required="required">
                          </div>
                        </div>

                        <!-- email field -->
                        <div class="uk-form-row uk-margin-bottom">
                          <label for="email" data-uk-tooltip title="<strong>Email</strong><br />Email Address for contact.">Email<span class="star"> *</span></label>
                          <div class="uk-form-controls">
                            <input type="email" class="uk-width-1-1" name="contact-email" placeholder="" size="30" required="required">
                          </div>
                        </div>

                        <!-- subject field -->
                        <div class="uk-form-row uk-margin-bottom">
                          <label for="subject" data-uk-tooltip title="<strong>Subject</strong><br />Enter the subject of your message here.">Assunto</label>
                          <div class="uk-form-controls">
                            <input type="text" class="uk-width-1-1 optional" name="contact-subject" placeholder="" size="60">
                          </div>
                        </div>

                        <!-- message field -->
                        <div class="uk-form-row uk-margin-bottom">
                          <label for="message" data-uk-tooltip title="<strong>Message</strong><br />Enter your message here.">Mensagem<span class="star"> *</span></label>
                          <div class="uk-form-controls">
                            <textarea class="uk-width-1-1" name="contact-message" cols="30" rows="3" placeholder="" required="required"></textarea>
                          </div>
                        </div>

                        <!-- submit button -->
                        <div class="form-actions">
                          <button id="Submitbtn" class="uk-button uk-button-primary" type="submit">Enviar</button>
                        </div>

                        <div id="message"></div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </main>
        </div>

        <!-- sidebar-a -->
        <aside class="tm-sidebar-a uk-width-medium-1-4">
          <div class="uk-panel uk-panel-box">
            <h3 class="uk-panel-title">Curitiba</h3>
            <p>Meat Balls Delivery
              <!-- <br> Rua Salvador, 718 -->
              </p>
            <ul class="uk-list list-icons">
              <li><i class="uk-icon-phone"></i> (41) 3023-9712</li>
              <li><i class="uk-icon-phone"></i> (41) 99996-3686</li>
              <li><i class="uk-icon-map-marker"></i> Curitiba, Paraná</li>
            </ul>
          </div>

          <!--
            <div class="uk-panel uk-panel-box">
            <h3 class="uk-panel-title">Dubai</h3>
            <p>gaúcho ristorante
              <br> Garden Mall, One way street</p>
            <ul class="uk-list list-icons">
              <li><i class="uk-icon-phone"></i> +44 555 000-000</li>
              <li><i class="uk-icon-map-marker"></i> Manchester, London</li>
            </ul>
          </div>
          -->
        </aside>

        <!-- sidebar-b -->
        <aside class="tm-sidebar-b uk-width-medium-1-4">
          <div class="uk-panel uk-panel-box">
          <!--  
          <h3 class="uk-panel-title">Contact Us</h3>
            <p>gaúcho ristorante
              <br> Garden City, One way street
              <br> Ground Floor</p>
            <ul class="uk-list list-icons">
              <li><i class="uk-icon-phone"></i> +44 555 000-000</li>
              <li><i class="uk-icon-mobile"></i> +44 777 000-000</li>
              <li><i class="uk-icon-map-marker"></i> Manchester, London</li>
            </ul>
              -->
            <h3 class="uk-module-title uk-margin-large-top">We are social</h3>
            <div class="tm-socialbuttons">
              <!-- <a href="#" class="uk-icon-button uk-icon-vk" target="_blank"></a> -->
              <a href="#" class="uk-icon-button uk-icon-instagram" target="_blank"></a>
              <a href="https://www.facebook.com/arrowthemes" class="uk-icon-button uk-icon-facebook" target="_blank"></a>
              <a href="https://twitter.com/arrowthemes" class="uk-icon-button uk-icon-twitter" target="_blank"></a>
            </div>
            <br>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <!-- bottom-a -->
  <div id="tm-bottom-a" class="tm-block-bottom-a uk-block uk-block-secondary">
    <div class="uk-container uk-container-center">
      <section class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
        <div class="uk-width-1-1">
          <div class="uk-panel">

            <div class="uk-grid" data-uk-grid-margin>

              <div class="uk-width-medium-1-2">
                <h2 class="uk-margin-small-top">Inscreva-se e receba nossas promoções</h2>
              </div>

              <div class="uk-width-medium-1-2">

              <!-- subscription form -->
                <form id="subscribe_form" class="uk-form">

                  <div id="alert-msg-subscribe" class="alert-msg"></div>

                  <div class="uk-grid" data-uk-grid-margin>

                    <div class="uk-width-medium-2-5">
                      <div>
                        <input type="text" placeholder="Your name" name="subscribe-name" class="uk-width-1-1" required="required">
                      </div>
                    </div>

                    <div class="uk-width-medium-2-5">
                      <div>
                        <input type="email" placeholder="Email address" name="subscribe-email" class="uk-width-1-1" required="required">
                      </div>
                    </div>

                    <div class="uk-width-medium-1-5">
                      <div class="form-group uk-margin-remove">
                        <button id="subscribe_button" type="submit" class="uk-button uk-button-primary uk-button-large">Promoções!</button>
                      </div>
                    </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- bottom-c -->
  <!--
  <div id="tm-bottom-c" class="tm-block-bottom-c uk-block uk-block-default tm-block-fullwidth tm-grid-collapse">
    <div class="uk-container uk-container-center">
      <section class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>

        <div class="uk-width-1-1">
          <div class="uk-panel">

            #map
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">map embed</a></div><script type="text/javascript"> function init_map(){var latlng = new google.maps.LatLng(51.5141484,-0.11134709999998904); var myOptions = {zoom:16,styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],center: latlng,navigationControl: true,scrollwheel:false,mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.5141484,-0.11134709999998904)});infowindow = new google.maps.InfoWindow({content:"<b>Gaucho Restaurant</b><br/>125 Chancery Ln<br/> London" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

              #generate your own map -> http://www.map-embed.com/

          </div>
        </div>
      </section>
    </div>
  </div>
  -->
  <!-- bottom-e -->
  <div id="tm-bottom-e" class="tm-block-bottom-e uk-block uk-block-default tm-inner-shadow tm-overlay-secondary" data-uk-parallax="{bg: '-200'}" style="background-image: url('images/background/bg-1.jpg');">
    <div class="uk-container uk-container-center">
      <section class="tm-bottom-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>

        <div class="uk-width-1-1">
          <div class="uk-panel uk-text-center">

            <img src="images/demo/default/logo/logo-bottom.svg" width="300" height="120" alt="demo">
          </div>
        </div>
      </section>
    </div>
  </div>

