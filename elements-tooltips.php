
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
                    <h2 class="uk-module-title">Tooltips</h2>
                    <p>Tooltips are snippets that provide more information on hover. They can be added to any element by adding the <code>data-uk-tooltip</code> attribute and specifying the title in the same element.</p>
                    <ul class="shortcode-icons">
                      <li><a class="uk-icon-button uk-icon-dribbble" data-uk-tooltip="" href="http://dribbble.com/arrowthemes" target="_blank" title="dribbble"></a></li>
                      <li><a class="uk-icon-button uk-icon-facebook" data-uk-tooltip="" href="http://www.facebook.com/arrowthemes" target="_blank" title="facebook"></a></li>
                      <li><a class="uk-icon-button uk-icon-twitter" data-uk-tooltip="" href="http://www.twitter.com/arrowthemes" target="_blank" title="twitter"></a></li>
                    </ul>

                    <p><br></p>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <pre>&lt;a class="uk-icon-dribbble" data-uk-tooltip href="http://dribbble.com/arrowthemes" target="blank" title="dribbble"&gt;&lt;/a&gt;</pre>
                    <p><br></p>

                    <h3 class="uk-module-title">Tooltip position</h3>
                    <p>You can specify the position of the tooltip by adding one of the following options to the <code>data-uk-tooltip</code> attribute</p>
                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th>Options</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>pos:'top'</code></td>
                          <td>Aligns the tooltip to the top.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'top-left'</code></td>
                          <td>Aligns the tooltip to the top left.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'top-right'</code></td>
                          <td>Aligns the tooltip to the top right.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'bottom'</code></td>
                          <td>Aligns the tooltip to bottom.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'bottom-left'</code></td>
                          <td>Aligns the tooltip to bottom left.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'bottom-right'</code></td>
                          <td>Aligns the tooltip to bottom right.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'left'</code></td>
                          <td>Aligns the tooltip to left.</td>
                        </tr>
                        <tr>
                          <td><code>pos:'right'</code></td>
                          <td>Aligns the tooltip to right.</td>
                        </tr>
                      </tbody>
                    </table>

                    <br>
                    <ul class="shortcode-icons">
                      <li><a class="uk-icon-button uk-icon-dribbble" href="http://dribbble.com/arrowthemes" target="blank" title="dribbble" data-uk-tooltip="{pos:'top'}"></a></li>
                      <li><a class="uk-icon-button uk-icon-facebook" href="http://www.facebook.com/arrowthemes" target="blank" title="facebook" data-uk-tooltip="{pos:'bottom'}"></a></li>
                      <li><a class="uk-icon-button uk-icon-twitter" href="http://www.twitter.com/arrowthemes" target="blank" title="twitter" data-uk-tooltip="{pos:'left'}"></a></li>
                    </ul>

                    <p><br></p>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <pre>&lt;a class="uk-icon-dribbble" data-uk-tooltip="{pos: 'bottom'}" href="http://dribbble.com/arrowthemes" target="blank" title="dribbble"&gt;&lt;/a&gt;</pre>

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

