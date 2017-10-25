
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
                    <h1 class="uk-module-title-alt uk-margin-top">Shortcodes</h1>
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
                    <h2 class="uk-module-title">Dropdowns</h2>
                    <p>Dropdowns are a creative way to provide more options on a click or hover element. With Uikit dropdown component, you can attach the dropdown to couple of elements to enrich your UI composition.</p>
                    <h3 class="uk-module-title">Button with dropdowns</h3>
                    <p>To create a button dropdown, wrap the <code>uk-button-dropdown</code> class around a button that you'd like to add a dropdown menu, then add the dropdowm markup right after the button. Additionally, you can add an arrow icon using the <code><i>[</i>icon]</code> shortcode to depict a dropdown menu.</p>
                    <div class="uk-button-dropdown" data-uk-dropdown="">
                      <a class="uk-button-default uk-button" href="#" target="_self">Dropdown 1 <i class="uk-icon-angle-down"></i></a>
                      <div class="uk-dropdown">
                        <ul class="uk-nav uk-nav-dropdown">
                          <ul>
                            <li><a href="#">Menu item</a> </li>
                            <li><a href="#">Menu item</a> </li>
                            <li class="uk-nav-header uk-navbar-nav-subtitle">Menu Heading
                              <div>Subtitle possible</div>
                            </li>
                            <li><a href="#"><i class="uk-icon-envelope-o"></i> Menu Icon</a> </li>
                            <li><a href="#"><i class="uk-icon-heart-o"></i> Another Menu item</a> </li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Separated item</a> </li>
                          </ul>
                        </ul>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div> 
                    <pre>&lt;div class="uk-button-dropdown" data-uk-dropdown&gt;
  &lt;a class="uk-button-default uk-button" href="#" target="_self"&gt;Dropdown 1 &lt;i class="uk-icon-angle-down"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;div class="uk-dropdown"&gt;
    &lt;ul class="uk-nav uk-nav-dropdown"&gt;&lt;p&gt;&lt;/p&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
      &lt;li class="uk-nav-header uk-navbar-nav-subtitle"&gt;Menu Heading
        &lt;div&gt;Subtitle possible&lt;/div&gt;
      &lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;&lt;i class="uk-icon-envelope-o"&gt;&lt;/i&gt; Menu Icon&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;&lt;i class="uk-icon-heart-o"&gt;&lt;/i&gt; Another Menu item&lt;/a&gt;&lt;/li&gt;
      &lt;li class="uk-nav-divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Separated item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Button group with dropdowns</h3>
                    <p>You can also use button groups to split buttons into a standard action on the left and a dropdown toggle on the right.</p>
                    <div class="uk-button-group"> <a class="uk-button-success uk-button" href="#" target="_self">Button</a>
                      <div class="" data-uk-dropdown=""> <a class="uk-button-success uk-button" href="#" target="_self"><i class="uk-icon-caret-down"></i></a>
                        <div class="uk-dropdown " style="">
                          <ul class="uk-nav uk-nav-dropdown">
                            <ul>
                              <li><a href="#">Menu item</a> </li>
                              <li><a href="#">Menu item</a> </li>
                              <li class="uk-nav-header uk-navbar-nav-subtitle">Menu Heading
                                <div>Subtitle possible</div>
                              </li>
                              <li><a href="#"><i class="uk-icon-envelope-o"></i> Menu Icon</a> </li>
                              <li><a href="#"><i class="uk-icon-heart-o"></i> Another Menu item</a> </li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="#">Separated item</a> </li>
                            </ul>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="uk-button-group"> <a class="uk-button-color uk-button" href="#" target="_self">Button</a>
                      <div class="" data-uk-dropdown=""> <a class="uk-button-color uk-button" href="#" target="_self"><i class="uk-icon-caret-down"></i></a>
                        <div class="uk-dropdown " style="">
                          <ul class="uk-nav uk-nav-dropdown">
                            <ul>
                              <li><a href="#">Menu item</a> </li>
                              <li><a href="#">Menu item</a> </li>
                              <li class="uk-nav-header uk-navbar-nav-subtitle">Menu Heading
                                <div>Subtitle possible</div>
                              </li>
                              <li><a href="#"><i class="uk-icon-envelope-o"></i> Menu Icon</a> </li>
                              <li><a href="#"><i class="uk-icon-heart-o"></i> Another Menu item</a> </li>
                              <li class="uk-nav-divider"></li>
                              <li><a href="#">Separated item</a> </li>
                            </ul>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>
                    <pre>&lt;div class="uk-button-group"&gt;
  &lt;a class="uk-button-success uk-button" href="#" target="_self"&gt;Button&lt;/a&gt;
  &lt;div class="" data-uk-dropdown&gt;
    &lt;a class="uk-button-success uk-button" href="#" target="_self"&gt;&lt;i class="uk-icon-caret-down"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;div class="uk-dropdown"&gt;
      &lt;ul class="uk-nav uk-nav-dropdown"&gt;&lt;p&gt;&lt;/p&gt;
        dropdown items go here
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
                    <br>
                    <p>The following is a list of possible class options that can be used in conjunction with the <code>uk-dropdown</code> class</p>
                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th class="uk-width-1-4">style</th>
                          <th class="uk-width-3-4">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code>uk-color</code> </td>
                          <td>Use the main menu color in the dropdown menu</td>
                        </tr>
                        <tr>
                          <td><code>uk-dropdown-flip</code> </td>
                          <td>Aligns the dropdown menu to the right</td>
                        </tr>
                        <tr>
                          <td><code>uk-dropdown-up</code> </td>
                          <td>Aligns the dropdown menu above the toggle</td>
                        </tr>
                        <tr>
                          <td><code>uk-dropdown-center</code> </td>
                          <td>Centers the dropdown menu.</td>
                        </tr>
                        <tr>
                          <td><code>uk-dropdown-small</code> </td>
                          <td>Set the dropdown to be smaller</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div> 
                    <pre>&lt;div class="uk-button-group"&gt;
  &lt;a class="uk-button-success uk-button" href="#" target="_self"&gt;Button&lt;/a&gt;
  &lt;div class="" data-uk-dropdown&gt;
    &lt;a class="uk-button-success uk-button" href="#" target="_self"&gt;&lt;i class="uk-icon-caret-down"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;div class="uk-dropdown uk-color uk-dropdown-up uk-dropdown-center uk-dropdown-small"&gt;
      &lt;ul class="uk-nav uk-nav-dropdown"&gt;&lt;p&gt;&lt;/p&gt;
        dropdown items go here
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
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

