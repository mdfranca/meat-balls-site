
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
                    <h2 class="uk-module-title">Tables</h2>
                    <p>To create clean formatted tables using uikit style, add the <code>uk-table</code> class to a table. The table rows will be separated by lines.</p>

                    <table class="uk-table">
                      <caption>Table caption</caption>
                      <thead>
                        <tr>
                          <th>Table Heading</th>
                          <th>Table Heading</th>
                          <th>Table Heading</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td>Table Footer</td>
                          <td>Table Footer</td>
                          <td>Table Footer</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Table Data</td>
                          <td>Table Data</td>
                          <td>Table Data</td>
                        </tr>
                        <tr>
                          <td>Table Data</td>
                          <td>Table Data</td>
                          <td>Table Data</td>
                        </tr>
                        <tr>
                          <td>Table Data</td>
                          <td>Table Data</td>
                          <td>Table Data</td>
                        </tr>
                      </tbody>
                    </table>

                    <br>

                    <!-- toggle -->
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;table class="uk-table"&gt;
  &lt;caption&gt;...&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code>
                      </div>
                    </div>

                    <br>

                    <h3 class="uk-module-title">Style variation</h3>
                    <p>You can add more styling to the table by using a combination of classes to improve the visual appearance of your table</p>

                    <table class="uk-table uk-table-hover uk-table-striped">
                      <thead>
                        <tr>
                          <th><i class="uk-icon-gear"></i> Settings</th>
                          <th><i class="uk-icon-leaf"></i> Productivity</th>
                          <th><i class="uk-icon-usd"></i> Totals</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td>Totals</td>
                          <td></td>
                          <td>$ 49,000.00</td>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td class="uk-width-2-10">Table Data</td>
                          <td class="uk-width-5-10">Table Data</td>
                          <td class="uk-width-3-10">$ 10,000.00</td>
                        </tr>
                        <tr>
                          <td class="uk-width-2-10">Table Data</td>
                          <td class="uk-width-5-10">Table Data</td>
                          <td class="uk-width-3-10">$ 15,000.00</td>
                        </tr>
                        <tr>
                          <td class="uk-width-2-10">Table Data</td>
                          <td class="uk-width-5-10">Table Data</td>
                          <td class="uk-width-3-10">$ 24,000.00</td>
                        </tr>
                      </tbody>
                    </table>

                    <br>

                    <!-- toggle -->
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;table class="uk-table uk-table-hover uk-table-striped"&gt;
  &lt;caption&gt;...&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code>
                      </div>
                    </div>
                    <br>

                    <p>You can view more examples and classes that you can use <a href="http://getuikit.com/docs/table.html" target="_blank">from here</a></p>

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

