
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
                    <h2 class="uk-module-title" id="alerts">Alerts</h2>
                    <p>To emphasize a point with an alert box, use the <code>uk-alert</code> class</p>

                    <!-- alert -->
                    <div class="uk-alert">Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <br>
                    <pre>&lt;div class="uk-alert"&gt;Your alert message here&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Color variations</h3>

                    <p>You can change the color scheme of the alert box by adding the following classes: <code>uk-alert-success</code>, <code>uk-alert-warning</code>, or <code>uk-alert-danger</code></p>

                    <!-- alert -->
                    <div class="uk-alert-success uk-alert">Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</div>

                    <!-- alert -->
                    <div class="uk-alert-warning uk-alert">Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</div>

                    <!-- alert -->
                    <div class="uk-alert-danger uk-alert">Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.</div>

                     <br> <div class="uk-badge-note uk-margin-top uk-badge">markup</div><p></p>
                    <pre>&lt;div class="uk-alert-success uk-alert"&gt;Your alert message here&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Closable alerts</h3>

                    <p>To add a close button to an alert, use the <code>uk-alert-close uk-close</code> class</p>

                    <!-- alert -->
                    <div class="uk-alert uk-alert-success" data-uk-alert>
                      <a href="#" class="uk-alert-close uk-close"></a>
                      <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment</p>
                    </div>

                    <!-- alert -->
                    <div class="uk-alert uk-alert-danger" data-uk-alert>
                      <a href="#" class="uk-alert-close uk-close"></a>
                      <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment</p>
                    </div>

                    <br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <pre>&lt;div class="uk-alert-danger uk-alert"&gt;
  &lt;a href="#" class="uk-alert-close uk-close"&gt;&lt;/a&gt;
  &lt;p&gt;Your alert message here&lt;/p&gt;
&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Size modifier</h3>

                    <p>To create a large alert with added padding, use the <code>uk-alert-large</code> class.</p>

                    <!-- alert -->
                    <div class="uk-alert uk-alert-success uk-alert-large" data-uk-alert>
                      <a href="#" class="uk-alert-close uk-close"></a>
                      <h3 class="uk-module-title">We are because of you</h3>
                      <p>All of all our customers are happy with our current and upcoming projects. The other 5% are learning the secret of appreciating good stuff. It is possible for you to do whatever you choose, if you first get to know who you are</p>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-alert uk-alert-success uk-alert-large" data-uk-alert&gt;
  &lt;a href="#" class="uk-alert-close uk-close"&gt;&lt;/a&gt;
  &lt;h3 class="uk-module-title"&gt;Your title goes here&lt;/h3&gt;
  &lt;p&gt;your content goes here&lt;/p&gt;
&lt;/div&gt;</pre>

                    <br>
                    <hr>
                    <br>

                    <h2 class="uk-module-title" id="badges">Badges</h2>
                    <p>You can use badges to highlight a segment of text within your content by using the <code>uk-badge</code> class</p>

                    <div class="uk-badge">new</div>
                    <div class="uk-badge">legend</div>
                    <div class="uk-badge">note</div>
                    <br>
                    <br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-badge"&gt;new&lt;/div&gt;</pre>

                    <br>
                    <h3 class="uk-module-title">Color variations</h3>
                    <p>You can change the color scheme of the badge by adding the following classes: <code>uk-badge-success</code>, <code>uk-badge-warning</code>, or <code>uk-badge-danger</code>. You can also use the <code>uk-badge-notification</code> class to have a rounded badge, normally used with numbering.</p>

                    <div class="uk-badge-success uk-badge">new</div>
                    <div class="uk-badge-warning uk-badge">legend</div>
                    <div class="uk-badge-danger uk-badge">note</div>

                    <br><br>

                    <div class="uk-badge-note uk-badge-notification uk-badge">1</div>
                    <div class="uk-badge-note uk-badge-notification uk-badge">2</div>
                    <div class="uk-badge-note uk-badge-notification uk-badge">3</div>
                    <div class="uk-badge-note uk-badge-notification uk-badge">4</div>
                    <div class="uk-badge-note uk-badge-notification uk-badge">5</div>

                    <br><br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-badge-success uk-badge"&gt;new&lt;/div&gt;
&lt;div class="uk-badge-warning uk-badge"&gt;legend&lt;/div&gt;
&lt;div class="uk-badge-danger uk-badge"&gt;note&lt;/div&gt;
&lt;div class="uk-badge-note uk-badge-notification uk-badge"&gt;1&lt;/div&gt;</pre>

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

