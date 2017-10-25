
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
                    <h2 class="uk-module-title">Modal Box</h2>
                    <p>Use the <code>uk-modal</code> class to show a popup box with overlay. The <code>uk-modal</code> class can also be linked with these module positions: <code>modal-a</code>, <code>modal-b</code> and <code>modal-c</code>. By using one of these positions as your <code>target</code>, the modal box will show a popup of the modules that have be placed in these positions and assigned to the corresponding menu.</p>

                    <br>

                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th class="uk-width-1-4">target</th>
                          <th class="uk-width-3-4">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>modal-a</code></td>
                          <td>show modal box for modules in modal-a position</td>
                        </tr>
                        <tr>
                          <td><code>modal-b</code></td>
                          <td>show modal box for modules in modal-b position</td>
                        </tr>
                        <tr>
                          <td><code>modal-c</code></td>
                          <td>show modal box for modules in modal-c position</td>
                        </tr>
                      </tbody>
                    </table>

                    <br>
                    <p>For each module linked to <code>modal-a</code>, <code>modal-b</code> or <code>modal-c</code>, you can use Module Class Suffix to style it just like a normal module. The <code>target</code> parameter can also be the id of a content section.</p>

                    <br>
                    <h3 class="uk-module-title">Size modifier</h3>
                    <p>To adjust the size (width) of the modal box, add <code>uk-modal-dialog-small</code> or <code>uk-modal-dialog-large</code> to the Module Class of the module.</p><br>

                    <h3 class="uk-module-title">Trigger a modal box from link</h3><br>
                    <a class="uk-margin-small-right" href="#modal-a" data-uk-modal>modal-a</a>
                    <a class="uk-margin-small-right" href="#modal-b" data-uk-modal>modal-b</a>
                    <a class="uk-margin-small-right" href="#modal-c" data-uk-modal>modal-c</a>

                    <br><br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;a href="#modal-a" data-uk-modal&gt;modal-a&lt;/a&gt;
&lt;a href="#modal-b" data-uk-modal&gt;modal-b&lt;/a&gt;
&lt;a href="#modal-c" data-uk-modal&gt;modal-c&lt;/a&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Toggle modal box from buttons</h3>
                    <br>

                    <a class="uk-button uk-button-color uk-margin-small-right" href="#modal-a" data-uk-modal>modal-a</a>
                    <a class="uk-button uk-button-color uk-margin-small-right" href="#modal-b" data-uk-modal>modal-b</a>
                    <a class="uk-button uk-button-color uk-margin-small-right" href="#modal-c" data-uk-modal>modal-c</a>

                    <br><br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;a class="uk-button uk-button-color href="#modal-a" data-uk-modal=""&gt;modal-a&lt;/a&gt;
&lt;a class="uk-button uk-button-color href="#modal-b" data-uk-modal=""&gt;modal-b&lt;/a&gt;
&lt;a class="uk-button uk-button-color href="#modal-c" data-uk-modal=""&gt;modal-c&lt;/a&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Toggle modal box for inline content</h3>

                    <p>The <code>uk-modal</code> class can also be used for inline content by using the following sytnax:</p>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;!-- create a link that will trigger the pop-up modal box --&gt;
&lt;a class="uk-button" href="#mycontent" data-uk-modal&gt;Popup content&lt;/a&gt;

&lt;!-- create the content of the modal box --&gt;
&lt;div id="mycontent" class="uk-modal"&gt;
  &lt;div class="uk-modal-dialog uk-panel-box-primary"&gt;
    &lt;a href="" class="uk-modal-close uk-close"&gt;&lt;/a&gt;
    your content goes here
  &lt;/div&gt;
&lt;/div&gt;</pre>

                    <br>

                    <!-- modal link -->
                    <a class="uk-button" href="#mycontent" data-uk-modal>Popup content</a>

                    <!-- modal popup content -->
                    <div id="mycontent" class="uk-modal">
                      <div class="uk-modal-dialog uk-panel-box-primary">
                        <a href="" class="uk-modal-close uk-close"></a>
                        <h3 class="uk-module-title">Inline content</h3>
                        <p>Throughout life people will make you mad, disrespect you and treat you bad. Let God deal with the things they do, cause hate in your heart will consume you too. Be kind whenever possible. It is always possible.</p>
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

    <!-- modal-a position -->
    <div id="modal-a" class="uk-modal">
      <div class="uk-modal-dialog uk-panel-box uk-modal-dialog-small">
        <a class="uk-modal-close uk-close"></a>
        <h3 class="uk-panel-title">modal-a position</h3>
        <span class="tm-block-icon uk-align-left uk-icon-leaf"></span>
        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Believe in yourself! Have faith in your abilities. Module Class <code>uk-modal-dialog-small</code></p>
      </div>
    </div>

    <!-- modal-b position -->
    <div id="modal-b" class="uk-modal">
      <div class="uk-modal-dialog uk-panel-box uk-modal-dialog-large">
        <a class="uk-modal-close uk-close"></a>
        <h3 class="uk-panel-title">modal-b position</h3>
        <span class="tm-block-icon uk-align-left uk-icon-gear"></span>
        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Believe in yourself! Have faith in your abilities and not your inabilities. Module Class <code>uk-modal-dialog-large</code></p>
      </div>
    </div>

    <!-- modal-c position -->
    <div id="modal-c" class="uk-modal">
      <div class="uk-modal-dialog uk-panel-box">
        <a class="uk-modal-close uk-close"></a>
        <h3 class="uk-panel-title">modal-c position</h3>
        <span class="tm-block-icon uk-align-left uk-icon-check"></span>
        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Believe in yourself! Have faith in your abilities and not your inabilities.</p>
      </div>
    </div>

