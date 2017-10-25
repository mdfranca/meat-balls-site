
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
                    <h2 class="uk-module-title">Progress Bar</h2>
                    <p>Use the <code>uk-progress-bar</code> class to create a progress bar in your content. The progress bar width is defined by the <code>width</code> css style. The following classes can be used in the style parameter:</p>

                    <br>
                    <table class="uk-table">
                      <thead>
                      <tr>
                        <th>Class</th>
                        <th>Description</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>uk-progress-mini</code></td>
                          <td>Size modifier for a mini progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-progress-small</code></td>
                          <td>Size modifier for a small progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-progress-primary</code></td>
                          <td>Color modifier for a blue progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-progress-success</code></td>
                          <td>Color modifier for a green progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-progress-warning</code></td>
                          <td>Color modifier for an orange progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-progress-danger</code></td>
                          <td>Color modifier for a red progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-progress-striped</code></td>
                          <td>Add stripes to the progress bar</td>
                        </tr>
                        <tr>
                          <td><code>uk-active</code></td>
                          <td>Animate a striped progress bar</td>
                        </tr>
                      </tbody>
                    </table>

                    <br>
                    <h3 class="uk-module-title">Simple progress bar</h3>

                    <!-- progress bar -->
                    <div class="uk-progress">
                      <div class="uk-progress-bar" style="width: 40%"></div>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-progress"&gt;
  &lt;div class="uk-progress-bar" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Size modifiers </h3>

                    <div class="uk-progress uk-progress-mini">
                      <div class="uk-progress-bar" style="width: 40%"></div>
                    </div>

                    <div class="uk-progress uk-progress-small">
                      <div class="uk-progress-bar" style="width: 50%"></div>
                    </div>

                    <div class="uk-progress ">
                      <div class="uk-progress-bar" style="width: 60%"></div>
                    </div>

                    <br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-progress uk-progress-mini"&gt;
  &lt;div class="uk-progress-bar" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-progress uk-progress-small"&gt;
  &lt;div class="uk-progress-bar" style="width: 50%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-progress "&gt;
  &lt;div class="uk-progress-bar" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Colored progress bars</h3>

                    <div class="uk-progress uk-progress-primary">
                      <div class="uk-progress-bar" style="width: 30%"></div>
                    </div>

                    <div class="uk-progress uk-progress-success">
                      <div class="uk-progress-bar" style="width: 40%"></div>
                    </div>

                    <div class="uk-progress uk-progress-warning">
                      <div class="uk-progress-bar" style="width: 50%"></div>
                    </div>

                    <div class="uk-progress uk-progress-danger">
                      <div class="uk-progress-bar" style="width: 60%"></div>
                    </div>

                    <br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-progress uk-progress-primary"&gt;
  &lt;div class="uk-progress-bar" style="width: 30%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-progress uk-progress-success"&gt;
  &lt;div class="uk-progress-bar" style="width: 40%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-progress uk-progress-warning"&gt;
  &lt;div class="uk-progress-bar" style="width: 50%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-progress uk-progress-danger"&gt;
  &lt;div class="uk-progress-bar" style="width: 60%"&gt;&lt;/div&gt;
&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Combined options</h3>

                    <div class="uk-progress uk-progress-success uk-progress-striped uk-active">
                      <div class="uk-progress-bar" style="width: 45%">loading...</div>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-progress uk-progress-success uk-progress-striped uk-active"&gt;
  &lt;div class="uk-progress-bar" style="width: 45%"&gt;loading...&lt;/div&gt;
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

