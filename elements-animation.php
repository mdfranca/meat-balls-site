
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
                    <h2 class="uk-module-title">Animation</h2>
                      <p>To add animation to any component, use the <code>uk-animate-{transition}</code> class. To learn more about the animation classes, visit the <a href="http://getuikit.com/docs/animation.html" target="_blank">animation component</a> page.</p>
                      <br>
                      <div class="uk-badge-note uk-badge">markup</div>
                      <pre>&lt;div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}"&gt;
  your elements here
&lt;/div&gt;</pre>
                      <br>
                      <p> The <code>data-uk-scrollspy</code> attribute parameters are as follows: </p>
                      <table class="uk-table">
                        <thead>
                          <tr>
                            <th class="uk-width-1-4">Parameters</th>
                            <th class="uk-width-3-4">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><code>cls</code>
                            </td>
                            <td>Set the animation type. The animation options can be:<br> <code>uk-animation-slide-top</code>, <code>uk-animation-slide-bottom</code>, <code>uk-animation-slide-left</code>, <code>uk-animation-slide-right</code>, <code>uk-animation-fade,</code> <code>uk-animation-scale-up</code>, <code>uk-animation-scale-down</code>
                            </td>
                          </tr>
                          <tr>
                            <td><code>delay</code>
                            </td>
                            <td>Set the animation delay in milliseconds. E.g 200 </td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                      <h3 class="uk-module-title">Example</h3>
                      <br>
                      <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                          <div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100}">
                            <h3 class="uk-module-title">One third</h3> Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                          </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                          <div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}">
                            <h3 class="uk-module-title">One third</h3> Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                          </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                          <div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}">
                            <h3 class="uk-module-title">One third</h3> Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion={showfirst:false,duration:300}>
                        <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                        <div class="uk-accordion-content"><code>&lt;div class="uk-grid" data-uk-grid-margin&gt;
  &lt;div class="uk-width-medium-1-3"&gt;
    &lt;div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:100}"&gt;
      &lt;h3 class="uk-module-title"&gt;One third&lt;/h3&gt; Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
    &lt;/div&gt;

  &lt;/div&gt;
  &lt;div class="uk-width-medium-1-3"&gt;
    &lt;div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300}"&gt;
      &lt;h3 class="uk-module-title"&gt;One third&lt;/h3&gt; Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
    &lt;/div&gt;
    
  &lt;/div&gt;
  &lt;div class="uk-width-medium-1-3"&gt;
    &lt;div data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}"&gt;
      &lt;h3 class="uk-module-title"&gt;One third&lt;/h3&gt; Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
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

