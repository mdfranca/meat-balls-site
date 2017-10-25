
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
                    <h2 class="uk-module-title">Buttons</h2>
                    <p>To create a button, use the <code>uk-button</code> class. You can also use the following classes to add color or style the button as a link: <code>uk-button-simple, uk-button-default, uk-button-primary, uk-button-line, uk-button-success, uk-button-danger, uk-button-link</code></p>
                    <br>
                    <h3 class="uk-module-title">Examples</h3> <a class="uk-button-default uk-button" href="#" target="_self">Default link</a>
                    <button class="uk-button-primary uk-button" href="#" target="_self">input button</button>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;a class="uk-button-simple uk-button" href="" target="_self"&gt;Simple link&lt;/a&gt;
&lt;button class="uk-button-default uk-button" href="" target="_self"&gt;input button&lt;/button&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Button variations</h3> 
                    <a class="uk-button-default uk-button" href="#" target="_self">Default</a> 
                    <a class="uk-button-primary uk-button" href="#" target="_self">Primary</a> 
                    <a class="uk-button-success uk-button" href="#" target="_self">Success</a> 
                    <a class="uk-button-danger uk-button" href="#" target="_self">Danger</a> 
                    <a class="uk-button-simple uk-button" href="#" target="_self">Simple</a> 
                    <a class="uk-button-link uk-button" href="#" target="_self">link</a>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;a class="uk-button-simple uk-button" href="" target="_self"&gt;Simple&lt;/a&gt;
&lt;a class="uk-button-default uk-button" href="" target="_self"&gt;Default&lt;/a&gt;
&lt;a class="uk-button-primary uk-button" href="" target="_self"&gt;Primary&lt;/a&gt;
&lt;a class="uk-button-success uk-button" href="" target="_self"&gt;Success&lt;/a&gt;
&lt;a class="uk-button-danger uk-button" href="" target="_self"&gt;Danger&lt;/a&gt;
&lt;a class="uk-button-link uk-button" href="" target="_self"&gt;link&lt;/a&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Button sizes</h3>
                    <p>You can add different size classes to your button to create button size variation using the size classes <code>uk-button-mini</code>, <code>uk-button=small</code> or <code>uk-button-large</code> </p>
                    <p>
                      <a class="uk-button-color uk-button-mini uk-button" href="#" target="_self">mini button</a> 
                      <a class="uk-button-color uk-button-small uk-button" href="#" target="_self">small button</a> 
                      <a class="uk-button-color uk-button" href="#" target="_self" size="">default button</a> 
                      <a class="uk-button-color uk-button-large uk-button" href="#" target="_self">Large button</a>
                      <br>
                      <br>
                    </p>
                  <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                  <pre>&lt;a class="uk-button-color uk-button-mini uk-button" href="" target="_self"&gt;mini button&lt;/a&gt;
&lt;a class="uk-button-color uk-button-small uk-button" href="" target="_self"&gt;small button&lt;/a&gt;
&lt;a class="uk-button-color uk-button" href="" target="_self" size=""&gt;default button&lt;/a&gt;
&lt;a class="uk-button-color uk-button-large uk-button" href="" target="_self"&gt;Large button&lt;/a&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Button group</h3>
                    <p>To create a button group, wrap the <code>button_group</code> class around the buttons that you'd like to be in the same group.</p>
                    <div class="uk-button-group"> 
                      <a class="uk-button-color uk-button" href="#" target="_self">small</a> 
                      <a class="uk-button-color uk-button" href="#" target="_self">medium</a> 
                      <a class="uk-button-color uk-button" href="#" target="_self">large</a>
                    </div>
                    <br>
                    <br>
                    <div class="uk-button-group"> 
                      <a class="uk-button-color uk-button-small uk-button" href="#" target="_self">bad</a> 
                      <a class="uk-button-color uk-button-small uk-button" href="#" target="_self">average</a> 
                      <a class="uk-button-color uk-button-small uk-button" href="#" target="_self">good</a>
                    </div>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-button-group"&gt;
  &lt;a class="uk-button-color uk-button" href="" target="_self"&gt;small&lt;/a&gt;
  &lt;a class="uk-button-color uk-button" href="" target="_self"&gt;medium&lt;/a&gt;
  &lt;a class="uk-button-color uk-button" href="" target="_self"&gt;large&lt;/a&gt;
&lt;/div&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Button with icons</h3>
                    <p>To create a button with icon, add the <code>uk-icon-{icon}</code> class besides the text of the button. <a href="?page=elements-icons">Click here</a> to see a list of all icons</p>
                    <br> 
                    <a class="uk-button-color uk-button" href="#" target="_self">complete <i class="uk-icon-check"></i></a> 
                    <a class="uk-button-success uk-button" href="#" target="_self">events list <i class="uk-icon-caret-down"></i></a> 
                    <a class="uk-button-default uk-button" href="#" target="_self"><i class="uk-icon-camera"></i> gallery</a> 
                    <a class="uk-button-link uk-button" href="#" target="_self">Download <i class="uk-icon-cloud-download"></i></a>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div> 
                    <pre>&lt;a class="uk-button-default uk-button" href="" target="_self"&gt;&lt;i class="uk-icon-camera"&gt;&lt;/i&gt; gallery&lt;/a&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Icon buttons</h3>
                    <p>You can create icon buttons using the <code>uk-icon-button</code> class. These can come in handy especially when creating social icons.</p>
                    <br>
                    <a href="#" class="uk-icon-button uk-icon-twitter" target="_self"></a>
                    <a href="#" class="uk-icon-button uk-icon-dribbble" target="_self"></a>
                    <a href="#" class="uk-icon-button uk-icon-facebook" target="_self"></a>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;a href="" class="uk-icon-button uk-icon-twitter" target="_self"&gt;&lt;/a&gt;
&lt;a href="" class="uk-icon-button uk-icon-dribbble" target="_self"&gt;&lt;/a&gt;
&lt;a href="" class="uk-icon-button uk-icon-facebook" target="_self"&gt;&lt;/a&gt;</pre>
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

