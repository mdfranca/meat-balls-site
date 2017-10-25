
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
                    <h2 class="uk-module-title">Panels</h2>
                    <p>Use the <code>uk-panel uk-panel-box</code> classes to create panels</p>

                  <br>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3">

                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box">
                        <h3>Panel Title</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>

                    <div class="uk-width-medium-1-3">

                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box">
                        <h3>Panel Title</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>

                    <div class="uk-width-medium-1-3">

                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box">
                        <h3>Panel Title</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="uk-badge-note uk-margin-top uk-badge">markup</div><p></p>

                  <pre>&lt;div class="uk-panel uk-panel-box"&gt;
  &lt;h3&gt;Panel Title&lt;/h3&gt;
  &lt;p&gt;Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.&lt;/p&gt;
&lt;/div&gt;</pre>
                  <br>
                  <div class="uk-badge-danger uk-badge">important</div>
                  <p class="uk-margin-top">In each of these examples, we've nested the panel code within the <code>column</code> grid.</p><br>

                  <h3 class="uk-module-title">Style modifiers</h3>
                  <p>You can add style modifiers <code>uk-panel-box-primary</code> and <code>uk-panel-box-secondary</code> to change the visual appearance of the panel. You can also add the <code>uk-panel-title</code> class to the heading to adapt the heading styling to the panel.</p>

                  <br>

                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">

                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box uk-panel-box-primary">
                        <h3 class="uk-panel-title">Primary Panel</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>

                    <div class="uk-width-medium-1-2">

                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                        <h3 class="uk-panel-title">Secondary Panel</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                  <br>

                  <pre>&lt;div class="uk-panel uk-panel-box uk-panel-box-primary"&gt;
  &lt;h3 class="uk-panel-title"&gt;Panel Title&lt;/h3&gt;
  &lt;p&gt;Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.&lt;/p&gt;
&lt;/div&gt;</pre>

                  <br>
                  <h3 class="uk-module-title">Panel title with Icons</h3><p></p>

                  <p>You can also add icons to the panels by using the <code>uk-icon-{icon}</code> class right next to the header.</p>

                  <br>

                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box uk-panel-box-primary">
                        <h3 class="uk-panel-title"><i class="uk-icon-envelope-o"></i> Primary Panel</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>

                    <div class="uk-width-medium-1-2">
                      <!-- panel box -->
                      <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                        <h3 class="uk-panel-title"><i class="uk-icon-gear"></i> Secondary Panel</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</p>
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="uk-badge-note uk-margin-top uk-badge">markup</div><p></p>
                  <pre>&lt;div class="uk-panel uk-panel-box uk-panel-box-primary"&gt;
  &lt;h3 class="uk-panel-title"&gt;&lt;i class="uk-icon-envelope-o"&gt;&lt;/i&gt; Panel Title&lt;/h3&gt;
  &lt;p&gt;Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.&lt;/p&gt;
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

