
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
                    <h2 class="uk-module-title">Lightbox</h2>
                    <p>Use the <code>data-uk-lightbox</code> data attribute to show a popup box with an image. The lightbox utilizes the <a href="?page=elements-modal-box">modal component</a> to load images and videos to fit the entire modal box. You can configure the lightbox images to scroll through a gallery by setting the <code>group</code> parameter.</p>
                    <br>

                    <h3 class="uk-module-title uk-margin-bottom">Toggle lightbox from button</h3>
                    <a class="uk-button" href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Blown away">View image</a>

                    <br><br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;a class="uk-button" href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Blown away"&gt;View image&lt;/a&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Using the lightbox in a gallery</h3>
                    <br>

                    <div class="uk-grid" data-uk-grid-margin>
                      <div class="uk-width-medium-1-4">
                        <a href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'gallery1'}" title="Blown away">
                          <img class="uk-thumbnail" src="images/demo/gallery/1.jpg" width="800" height="800" alt="image">
                        </a>
                      </div>

                      <div class="uk-width-medium-1-4">
                        <a href="images/demo/gallery/7.jpg" data-uk-lightbox="{group:'gallery1'}" title="Spectacular">
                          <img class="uk-thumbnail" src="images/demo/gallery/7.jpg" width="800" height="800" alt="image">
                        </a>
                      </div>

                      <div class="uk-width-medium-1-4">
                        <a href="images/demo/gallery/2.jpg" data-uk-lightbox="{group:'gallery1'}" title="Unlock the door">
                          <img class="uk-thumbnail" src="images/demo/gallery/2.jpg" width="800" height="800" alt="image">
                        </a>
                      </div>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-grid" data-uk-grid-margin&gt;
  &lt;div class="uk-width-medium-1-4"&gt;
    &lt;a href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'gallery1'}" title="Blown away"&gt;
      &lt;img class="uk-thumbnail" src="images/demo/gallery/1.jpg" width="800" height="800" alt="image"&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;div class="uk-width-medium-1-4"&gt;
    &lt;a href="images/demo/gallery/7.jpg" data-uk-lightbox="{group:'gallery1'}" title="Spectacular"&gt;
      &lt;img class="uk-thumbnail" src="images/demo/gallery/7.jpg" width="800" height="800" alt="image"&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;div class="uk-width-medium-1-4"&gt;
    &lt;a href="images/demo/gallery/2.jpg" data-uk-lightbox="{group:'gallery1'}" title="Unlock the door"&gt;
      &lt;img class="uk-thumbnail" src="images/demo/gallery/2.jpg" width="800" height="800" alt="image"&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

                    <br>

                    <h3 class="uk-module-title">Adding an overlay</h3>

                    <p>To add an overlay icon to an image, use the <code>uk-overlay-icon</code> class</p>. The <code>uk-overlay-panel</code> class can be used to place an overlay panel that appears on hover. Additionally, you can use the following classes to animate the overlay panel:<br>

                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th class="uk-width-1-4">animation</th>
                          <th class="uk-width-3-4">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>uk-overlay-slide-top</code></td>
                          <td>slide the overlay panel in from the top</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-slide-bottom</code></td>
                          <td>slide the overlay panel in from the bottom</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-slide-left</code></td>
                          <td>slide the overlay panel in from the left</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-slide-right</code></td>
                          <td>slide the overlay panel in from the right</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-fade</code></td>
                          <td>fade in the overlay panel</td>
                        </tr>
                      </tbody>
                    </table>

                    <br>
                    <p>The following classes can be used with the <code><i>[</i>overlay_panel]</code> class to set the position of the overlay panel.</p>

                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th class="uk-width-1-4">class</th>
                          <th class="uk-width-3-4">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>uk-overlay-top</code></td>
                          <td>align the overlay panel to the top</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-bottom</code></td>
                          <td>align the overlay panel to the bottom</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-left</code></td>
                          <td>align the overlay panel to the left</td>
                        </tr>
                        <tr>
                          <td><code>uk-overlay-right</code></td>
                          <td>align the overlay panel to the right</td>
                        </tr>
                      </tbody>
                    </table>
                    <br>

                    <div class="uk-grid" data-uk-grid-margin>
                      <div class="uk-width-medium-1-4">
                        <a href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'gallery2'}" title="Blown away">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-thumbnail" src="images/demo/gallery/1.jpg" alt="image" width="800" height="800">
                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-icon"></div>
                          </figure>
                        </a>
                      </div>

                      <div class="uk-width-medium-1-4">
                        <a href="images/demo/gallery/7.jpg" data-uk-lightbox="{group:'gallery2'}" title="Spectacular">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-thumbnail" src="images/demo/gallery/7.jpg" alt="image" width="800" height="800">
                            <figcaption class="uk-overlay-panel uk-overlay-background tm-overlay-content uk-overlay-top uk-overlay-slide-top ">Good things happen to those who work</figcaption>
                          </figure>
                        </a>
                      </div>

                      <div class="uk-width-medium-1-4">
                        <a href="images/demo/gallery/2.jpg" data-uk-lightbox="{group:'gallery2'}" title="Unlock the door">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-thumbnail uk-overlay-scale" src="images/demo/gallery/2.jpg" alt="image" width="800" height="800">
                            <figcaption class="uk-overlay-panel uk-overlay-background tm-overlay-content uk-overlay-bottom uk-overlay-slide-bottom ">Good things happen to those who work</figcaption>
                          </figure>
                        </a>
                      </div>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-grid" data-uk-grid-margin&gt;
  &lt;div class="uk-width-medium-1-4"&gt;
    &lt;a href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'gallery2'}" title="Blown away"&gt;
      &lt;figure class="uk-overlay uk-overlay-hover"&gt;
        &lt;img class="uk-thumbnail" src="images/demo/gallery/1.jpg" alt="image" width="800" height="800"&gt;
        &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-icon"&gt;&lt;/div&gt;
      &lt;/figure&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;div class="uk-width-medium-1-4"&gt;
    &lt;a href="images/demo/gallery/7.jpg" data-uk-lightbox="{group:'gallery2'}" title="Spectacular"&gt;
      &lt;figure class="uk-overlay uk-overlay-hover"&gt;
        &lt;img class="uk-thumbnail" src="images/demo/gallery/7.jpg" alt="image" width="800" height="800"&gt;
        &lt;figcaption class="uk-overlay-panel uk-overlay-background tm-overlay-content uk-overlay-top uk-overlay-slide-top "&gt;
          your caption goes here
        &lt;/figcaption&gt;
      &lt;/figure&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;div class="uk-width-medium-1-4"&gt;
    &lt;a href="images/demo/gallery/2.jpg" data-uk-lightbox="{group:'gallery2'}" title="Unlock the door"&gt;
      &lt;figure class="uk-overlay uk-overlay-hover"&gt;
        &lt;img class="uk-thumbnail uk-overlay-scale" src="images/demo/gallery/2.jpg" alt="image" width="800" height="800"&gt;
        &lt;figcaption class="uk-overlay-panel uk-overlay-background tm-overlay-content uk-overlay-bottom uk-overlay-slide-bottom "&gt;
          your caption goes here
        &lt;/figcaption&gt;
      &lt;/figure&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

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

