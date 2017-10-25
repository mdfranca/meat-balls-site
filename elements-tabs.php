
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
                    <h2 class="uk-module-title">Tabs</h2>
                    <p>To create a set of tabs, use the <code>uk-tab</code> class. Uikit tabs fit nicely in responsive layouts by converting the tabs into a dropdown menu. The tabs also scale to fit its contents by adjusting the tab height automatically.</p>

                    <br>

                    <h3 class="uk-module-title">Horizontal tabs</h3>
                    <br>

                    <!-- horizontal tab -->

                    <!-- tab links -->
                    <ul class="uk-tab uk-tab-grid uk-tab-top" data-uk-tab="{connect:'#tabs_example1', animation: 'fade'}">
                      <li class="uk-active"><a href="#">Tab 1</a></li>
                      <li><a href="#">Tab 2</a></li>
                      <li><a href="#">Tab 3</a></li>
                    </ul>

                    <!-- tab content -->
                    <ul id="tabs_example1" class="uk-switcher uk-margin uk-tab-content">
                      <li>
                        <h3 class="uk-module-title">This is the first tab</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.</p>
                      </li>

                      <li>
                        <h3 class="uk-module-title">This is the second tab</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.</p>
                      </li>

                      <li>
                        <h3 class="uk-module-title">This is the third tab</h3>
                        <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.</p>
                      </li>
                    </ul>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;ul class="uk-tab uk-tab-grid uk-tab-top" data-uk-tab="{connect:'#tabs_example1', animation: 'fade'}"&gt;
    &lt;li class="uk-active"&gt;&lt;a href="#"&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Tab 3&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;

  &lt;ul id="tabs_example1" class="uk-switcher uk-margin uk-tab-content"&gt;
    &lt;li&gt;Your content goes here&lt;/li&gt;
    &lt;li&gt;Your content goes here&lt;/li&gt;
    &lt;li&gt;Your content goes here&lt;/li&gt;
  &lt;/ul&gt;</pre>

                    <br>

                    <h3 class="uk-module-title">Vertical tabs</h3>
                    <p>Vertical tabs use a combination of <code>uk-grid</code>, <code>uk-width-*</code> and <code>uk-tab</code> classes. The <code>uk-grid</code> class is used to define the tab container; the <code>uk-width-*</code> class is used to define the widths of the tabs and content; the <code>uk-tab</code> class creates the tab elements.</p>

                    <br>

                    <!-- vertical tabs -->
                    <div class="uk-grid">
                      <div class="uk-width-medium-2-10">
                        <ul class="uk-tab uk-tab-left" data-uk-tab="{connect:'#tabs_example2', animation: 'fade'}">
                          <li class="uk-active"><a href="#">Tab 1</a></li>
                          <li><a href="#">Tab 2</a></li>
                          <li><a href="#">Tab 3</a></li>
                        </ul>
                      </div>

                      <div class="uk-width-medium-8-10">
                        <ul id="tabs_example2" class="uk-switcher uk-margin uk-tab-content">
                          <li>
                            <h3 class="uk-module-title">This is the first tab</h3>
                            <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.</p>
                          </li>

                          <li>
                            <h3 class="uk-module-title">This is the second tab</h3>
                            <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.</p>
                          </li>

                          <li>
                            <h3 class="uk-module-title">This is the third tab</h3>
                            <p>Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. Never be bullied into silence. Never allow yourself to be made a victim. Accept no one's definition of your life; define yourself.</p>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-grid"&gt;
    &lt;div class="uk-width-medium-2-10"&gt;
      &lt;ul class="uk-tab uk-tab-left" data-uk-tab="{connect:'#tabs_example2', animation: 'fade'}"&gt;
        &lt;li class="uk-active"&gt;&lt;a href="#"&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Tab 3&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;

    &lt;div class="uk-width-medium-8-10"&gt;
      &lt;ul id="tabs_example2" class="uk-switcher uk-margin uk-tab-content"&gt;
        &lt;li&gt;your content goes here&lt;/li&gt;
        &lt;li&gt;your content goes here&lt;/li&gt;
        &lt;li&gt;your content goes here&lt;/li&gt;
      &lt;/ul&gt;
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

