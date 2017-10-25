
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
                    <h2 class="uk-module-title">Dynamic Grid</h2>
                      <p>To create a filterable portfolio grid, use the <code>data-uk-grid</code> data attribute. The <code>id</code> must be unique for each portfolio grid. Use the <code>data-uk-filter</code> data attribute to create filters for the grid. The <code>data-uk-filter</code> class can be placed in a different module position. You can learn more about the dynamic grid in the <a href="http://getuikit.com/docs/grid-js.html" target="_blank">full documentation</a></p>
                    <br>

                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th class="uk-width-1-4">Parameters</th>
                          <th class="uk-width-3-4">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>id</code></td>
                          <td>A unique id that identifies a dynamic grid</td>
                        </tr>
                        <tr>
                          <td><code>tag</code></td>
                          <td>Defines the filters for the dynamic grid. </td>
                        </tr>
                        <tr>
                          <td><code>animation</code></td>
                          <td>set the animation for the portfolio items</td>
                        </tr>
                      </tbody>
                    </table>
                    <br>

                    <!-- grid filter -->
                    <ul id="grid1" class="uk-subnav uk-subnav-pill">
                      <li class="uk-active" data-uk-filter=""><a href="#">all</a></li>
                      <li data-uk-filter="photography"><a href="#">Photography</a></li>
                      <li data-uk-filter="webdesign"><a href="#">Web Design</a></li>
                      <li data-uk-filter="illustration"><a href="#">Illustration</a></li>
                      <li data-uk-filter="media"><a href="#">Media</a></li>
                    </ul>

                    <!-- masonry grid -->
                    <div class="tm-dynamic-grid uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 " data-uk-grid="{gutter: 10, controls: '#grid1'}">

                      <!-- grid item -->
                      <div data-uk-filter="photography">
                        <div class="uk-panel uk-animation-fade">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-overlay-scale" src="images/demo/gallery/1.jpg" width="800" height="800" alt="image" >

                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                              <div>
                                <h3 class="uk-h3 tm-grid-title uk-margin">Blown away</h3>
                                <div class="uk-margin-small tm-grid-content">
                                  <p>Always continue the climb. It is possible for you to do whatever you choose</p>

                                  <!-- lightbox image -->
                                  <a class="uk-position-cover" href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Blown away"></a>
                                </div>
                              </div>
                            </div>

                          </figure>
                        </div>
                      </div>

                      <!-- grid item -->
                      <div data-uk-filter="webdesign">
                        <div class="uk-panel uk-animation-fade">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-overlay-scale" src="images/demo/gallery/7.jpg" width="800" height="800" alt="image" >

                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                              <div>
                                <h3 class="uk-h3 tm-grid-title uk-margin">Spectacular</h3>
                                <div class="uk-margin-small tm-grid-content">
                                  <p>Life is a series of natural and spontaneous changes. Don't resist them - that only creates sorrow. Let reality be reality</p>

                                  <!-- lightbox image -->
                                  <a class="uk-position-cover" href="images/demo/gallery/7.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Clear lens"></a>
                                </div>
                              </div>
                            </div>

                          </figure>
                        </div>
                      </div>

                      <!-- grid item -->
                      <div data-uk-filter="illustration">
                        <div class="uk-panel uk-animation-fade">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-overlay-scale" src="images/demo/gallery/2.jpg" width="800" height="800" alt="image" >

                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                              <div>
                                <h3 class="uk-h3 tm-grid-title uk-margin">Unlock the door</h3>
                                <div class="uk-margin-small tm-grid-content">
                                  <p>Design is not what it looks like; Design is how it works. Good design speaks volumes about the designer</p>

                                  <!-- lightbox image -->
                                  <a class="uk-position-cover" href="images/demo/gallery/2.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Unlock the door"></a>
                                </div>
                              </div>
                            </div>

                          </figure>
                        </div>
                      </div>

                      <!-- grid item -->
                      <div data-uk-filter="media">
                        <div class="uk-panel uk-animation-fade">
                          <figure class="uk-overlay uk-overlay-hover">
                            <img class="uk-overlay-scale" src="images/demo/gallery/4.jpg" width="800" height="800" alt="image" >

                            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                              <div>
                                <h3 class="uk-h3 tm-grid-title uk-margin">First cup</h3>
                                <div class="uk-margin-small tm-grid-content">
                                  <p>Good things come, not to the fast, but to those who wait.</p>

                                  <!-- lightbox image -->
                                  <a class="uk-position-cover" href="images/demo/gallery/4.jpg" data-uk-lightbox="{group:'porfolio1'}" title="First cup"></a>
                                </div>
                              </div>
                            </div>

                          </figure>
                        </div>
                      </div>

                    </div>

                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;!-- grid filter --&gt;
&lt;ul id="grid1" class="uk-subnav uk-subnav-pill"&gt;
  &lt;li class="uk-active" data-uk-filter=""&gt;&lt;a href="#"&gt;all&lt;/a&gt;&lt;/li&gt;
  &lt;li data-uk-filter="photography"&gt;&lt;a href="#"&gt;Photography&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- masonry grid --&gt;
&lt;div class="tm-dynamic-grid uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 " data-uk-grid="{gutter: 10, controls: '#grid1'}"&gt;

  &lt;!-- grid item --&gt;
  &lt;div data-uk-filter="photography"&gt;
    &lt;div class="uk-panel uk-animation-fade"&gt;
      &lt;figure class="uk-overlay uk-overlay-hover"&gt;
        &lt;img class="uk-overlay-scale" src="images/demo/gallery/1.jpg" width="800" height="800" alt="image" &gt;

        &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center"&gt;
          &lt;div&gt;
            &lt;h3 class="uk-h3 tm-grid-title uk-margin"&gt;Blown away&lt;/h3&gt;
            &lt;div class="uk-margin-small tm-grid-content"&gt;
              &lt;p&gt;Always continue the climb. It is possible for you to do whatever you choose&lt;/p&gt;

              &lt;!-- lightbox image --&gt;
              &lt;a class="uk-position-cover" href="images/demo/gallery/1.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Blown away"&gt;&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;

      &lt;/figure&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- grid item --&gt;
  &lt;div data-uk-filter="webdesign"&gt;
    &lt;div class="uk-panel uk-animation-fade"&gt;
      &lt;figure class="uk-overlay uk-overlay-hover"&gt;
        &lt;img class="uk-overlay-scale" src="images/demo/gallery/7.jpg" width="800" height="800" alt="image" &gt;

        &lt;div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center"&gt;
          &lt;div&gt;
            &lt;h3 class="uk-h3 tm-grid-title uk-margin"&gt;Spectacular&lt;/h3&gt;
            &lt;div class="uk-margin-small tm-grid-content"&gt;
              &lt;p&gt;Life is a series of natural and spontaneous changes. Don't resist them - that only creates sorrow. Let reality be reality&lt;/p&gt;

              &lt;!-- lightbox image --&gt;
              &lt;a class="uk-position-cover" href="images/demo/gallery/7.jpg" data-uk-lightbox="{group:'porfolio1'}" title="Clear lens"&gt;&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;

      &lt;/figure&gt;
    &lt;/div&gt;
  &lt;/div&gt;

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

