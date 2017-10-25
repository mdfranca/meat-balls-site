
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
                    <h2 class="uk-module-title">Parallax</h2>
                    <p>To create a parallax effect on an image, use the <code>data-uk-parallax</code> data attribute.</p>
                    <br>
                    <div class="uk-badge-note uk-badge">markup</div>
                    <pre>&lt;div style="height: 350px; background-image: url(images/background/bg-image-3.jpg);" data-uk-parallax="{bg: '-200'}"&gt;
&lt;/div&gt;</pre>
                    <br>
                    <p>The <code>data-uk-parallax</code> attribute can also be used to add parallax to html elements. To learn more about all the options attribute, see <a href="http://getuikit.com/docs/parallax.html#options" target="_blank">this table</a>
                      <br>
                      <div class="uk-badge-note uk-badge">markup</div>
                      <pre>&lt;div data-uk-parallax="{opacity: '0,1', scale: '0.75,1', viewport: '0.5'}"&gt;
  &lt;h1 class="uk-module-title-alt uk-margin-top"&gt;Our Menu&lt;/h1&gt;
  &lt;h3 class="uk-sub-title"&gt;The true taste of good design&lt;/h3&gt;
&lt;/div&gt;</pre>
                      <br>
                      <div class="uk-text-center uk-contrast uk-flex uk-flex-middle uk-flex-center" style="height: 350px; background-image: url(images/background/bg-image-3.jpg);" data-uk-parallax="{bg: '-200'}">
                        <div data-uk-parallax="{opacity: '0,1', scale: '0.75,1', viewport: '0.5'}">
                          <h1 class="uk-module-title-alt uk-margin-top">Our Menu</h1>
                          <h3 class="uk-sub-title">The true taste of good design</h3> </div>
                      </div>
                      <br>
                      <div class="uk-badge-note uk-badge">markup</div> 
                      <pre>&lt;div class="uk-text-center uk-contrast uk-flex uk-flex-middle uk-flex-center" style="height: 350px; background-image: url(images/background/bg-image-3.jpg);" data-uk-parallax="{bg: '-200'}"&gt;
  &lt;div data-uk-parallax="{opacity: '0,1', scale: '0.75,1', viewport: '0.5'}"&gt;
    &lt;h1 class="uk-module-title-alt uk-margin-top"&gt;Our Menu&lt;/h1&gt;
    &lt;h3 class="uk-sub-title"&gt;The true taste of good design&lt;/h3&gt; &lt;/div&gt;
&lt;/div&gt;</pre>
                      <br>

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

