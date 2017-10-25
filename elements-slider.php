
  <!-- header-a -->
  <div id="tm-header-a" class="tm-block-header-a uk-block uk-block-default tm-block-fullwidth tm-grid-collapse ">
    <div class="uk-container uk-container-center">
      <section class="tm-header-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}">

        <div class="uk-width-1-1">
          <div class="uk-panel uk-text-center uk-contrast tm-overlay-secondary tm-header-height">
            <div class="tm-background-cover uk-cover-background uk-flex uk-flex-center uk-flex-middle" style="background-position: 50% 0px; background-image:url(images/background/bg-image-11.jpg)" data-uk-parallax="{bg: '-200'}">
              <div class="uk-position-relative uk-container">

                <div data-uk-parallax="{opacity: '1,0', y: '-50'}">

                  <div data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300}">
                    <h1 class="uk-module-title-alt uk-margin-top">Elements</h1>
                  </div>

                  <div data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:800}">
                    <h5 class="uk-sub-title-small">If you can dream it, you can do it</h5>
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
        <div class="tm-main uk-width-medium-1-1">
          <main id="tm-content" class="tm-content">
            <article class="uk-article tm-article">
              <div class="tm-article-wrapper">
                <div class="tm-article-content uk-margin-large-bottom uk-margin-top-remove">
                  <div class="tm-article">
                    <h2 class="uk-module-title">Slider</h2>
                    <p> To create a slideset of panels with filters, use the <code>uk-slideset</code> class. The attributes can be used configure the parameters of the slider. See <a href="http://getuikit.com/docs/slideset.html#javascript-options" target="_blank">this table</a> for all the available settings options.</p>
                    <br>
                    <p>You can create filters using the data-uk-filter attribute.</p>
                    <div class="uk-badge-note uk-badge">markup</div> 
                    <pre>&lt;ul class="uk-subnav uk-flex-center"&gt;
  &lt;li data-uk-filter=""&gt;&lt;a href="#"&gt;All&lt;/a&gt;&lt;/li&gt;
  &lt;li data-uk-filter="bread"&gt;&lt;a href="#"&gt;bread&lt;/a&gt;&lt;/li&gt;
  &lt;li data-uk-filter="chicken"&gt;&lt;a href="#"&gt;chicken&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
                    <br>
                    <div class="tm-slideset-gaucho" data-uk-slideset="{default: 1,small: 2,medium: 2,large: 3, xlarge: 3, animation: 'fade'}">
                      <ul class="uk-subnav uk-flex-center">
                        <li data-uk-filter=""><a href="#">All</a></li>
                        <li data-uk-filter="bread"><a href="#">bread</a></li>
                        <li data-uk-filter="chicken"><a href="#">chicken</a></li>
                        <li data-uk-filter="fish"><a href="#">fish</a></li>
                        <li data-uk-filter="pasta"><a href="#">pasta</a></li>
                        <li data-uk-filter="prawns"><a href="#">prawns</a></li>
                        <li data-uk-filter="salads"><a href="#">salads</a></li>
                      </ul>
                      <div class="uk-slidenav-position uk-margin">
                        <ul class="uk-grid uk-slideset uk-grid-match uk-flex-center">
                          
                        <!-- slideset panel -->
                          <li data-uk-filter="pasta">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-1.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-1.jpg" class="uk-overlay-scale" alt="Butternut ravioli" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">Butternut ravioli</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                          
                          <!-- slideset panel -->
                          <li data-uk-filter="fish">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-2.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-2.jpg" class="uk-overlay-scale" alt="Grilled snapper" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">Grilled snapper</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                          
                          <!-- slideset panel -->
                          <li data-uk-filter="chicken">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-3.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-3.jpg" class="uk-overlay-scale" alt="Roasted chicken" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">Roasted chicken</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                          
                          <!-- slideset panel -->
                          <li data-uk-filter="prawns,fish">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-4.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-4.jpg" class="uk-overlay-scale" alt="Golden Prawns" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">Golden Prawns</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                          
                          <!-- slideset panel -->
                          <li data-uk-filter="salads">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-5.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-5.jpg" class="uk-overlay-scale" alt="French Salad" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">French Salad</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                          
                          <!-- slideset panel -->
                          <li data-uk-filter="bread">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-6.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-6.jpg" class="uk-overlay-scale" alt="Focaccia Bread" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">Focaccia Bread</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                          
                          <!-- slideset panel -->
                          <li data-uk-filter="pasta">
                            <div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left">
                              <a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-7.jpg"></a>
                              <div class="uk-text-center uk-panel-teaser">
                                <div class="uk-overlay "> <img src="images/demo/menu/special-7.jpg" class="uk-overlay-scale" alt="Spaghetti Bolognese" width="360" height="230" url="#">
                                  <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"></div>
                                </div>
                              </div>
                              <h3 class="uk-panel-title">Spaghetti Bolognese</h3> Sumptuous delicious food baked in our restaurants with curated spices </div>
                          </li>
                        </ul>
                        <a href="" class="uk-slidenav uk-slidenav-previous uk-hidden-touch" data-uk-slideset-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-next uk-hidden-touch" data-uk-slideset-item="next"></a>
                      </div>
                      <ul class="uk-slideset-nav uk-dotnav uk-flex-center uk-margin-bottom-remove">
                        <li data-uk-slideset-item="0">
                          <a></a>
                        </li>
                      </ul>
                    </div>
                    <br>
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion={showfirst:false,duration:300}>
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content">
  <code>&lt;div class="tm-slideset-gaucho" data-uk-slideset="{default: 1,small: 2,medium: 2,large: 3, xlarge: 3, animation: 'fade'}"&gt;
  &lt;ul class="uk-subnav uk-flex-center"&gt;
    &lt;li data-uk-filter=""&gt;&lt;a href="#"&gt;All&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-filter="bread"&gt;&lt;a href="#"&gt;bread&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-filter="chicken"&gt;&lt;a href="#"&gt;chicken&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-filter="fish"&gt;&lt;a href="#"&gt;fish&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-filter="pasta"&gt;&lt;a href="#"&gt;pasta&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-filter="prawns"&gt;&lt;a href="#"&gt;prawns&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-filter="salads"&gt;&lt;a href="#"&gt;salads&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="uk-slidenav-position uk-margin"&gt;
    &lt;ul class="uk-grid uk-slideset uk-grid-match uk-flex-center"&gt;
      
    &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="pasta"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-1.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-1.jpg" class="uk-overlay-scale" alt="Butternut ravioli" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;Butternut ravioli&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
      
      &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="fish"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-2.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-2.jpg" class="uk-overlay-scale" alt="Grilled snapper" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;Grilled snapper&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
      
      &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="chicken"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-3.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-3.jpg" class="uk-overlay-scale" alt="Roasted chicken" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;Roasted chicken&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
      
      &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="prawns,fish"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-4.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-4.jpg" class="uk-overlay-scale" alt="Golden Prawns" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;Golden Prawns&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
      
      &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="salads"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-5.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-5.jpg" class="uk-overlay-scale" alt="French Salad" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;French Salad&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
      
      &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="bread"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-6.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-6.jpg" class="uk-overlay-scale" alt="Focaccia Bread" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;Focaccia Bread&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
      
      &lt;!-- slideset panel --&gt;
      &lt;li data-uk-filter="pasta"&gt;
        &lt;div class="uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover uk-text-left"&gt;
          &lt;a data-uk-lightbox="{group:'slideset'}" class="uk-position-cover uk-position-z-index" href="images/demo/menu/special-7.jpg"&gt;&lt;/a&gt;
          &lt;div class="uk-text-center uk-panel-teaser"&gt;
            &lt;div class="uk-overlay "&gt; &lt;img src="images/demo/menu/special-7.jpg" class="uk-overlay-scale" alt="Spaghetti Bolognese" width="360" height="230" url="#"&gt;
              &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade"&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;h3 class="uk-panel-title"&gt;Spaghetti Bolognese&lt;/h3&gt; Sumptuous delicious food baked in our restaurants with curated spices &lt;/div&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href="" class="uk-slidenav uk-slidenav-previous uk-hidden-touch" data-uk-slideset-item="previous"&gt;&lt;/a&gt;
    &lt;a href="" class="uk-slidenav uk-slidenav-next uk-hidden-touch" data-uk-slideset-item="next"&gt;&lt;/a&gt;
  &lt;/div&gt;
  &lt;ul class="uk-slideset-nav uk-dotnav uk-flex-center uk-margin-bottom-remove"&gt;
    &lt;li data-uk-slideset-item="0"&gt;
      &lt;a&gt;&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </main>
        </div>
      </div>
    </div>
  </div>

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

