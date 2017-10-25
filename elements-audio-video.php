
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
                    <h2 class="uk-module-title" id="accordions">Audio</h2>

                    <p>To create an audio player, use the <code>[audio]</code> shortcode</p>
                  <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-medium-1-2">
                      <div class="plyr">
                        <audio controls="">
                          <source src="images/demo/audio/sample.mp3" type="audio/mp3">
                          <source src="images/demo/audio/sample.ogg" type="audio/ogg">
                        </audio>
                      </div>
                    </div>
                  </div><br>
                  <div class="uk-badge-note uk-badge">
                    markup
                  </div>
                  <pre>&lt;div class="plyr"&gt;
  &lt;audio controls=""&gt;
    &lt;source src="images/demo/audio/sample.mp3" type="audio/mp3"&gt; 
    &lt;source src="images/demo/audio/sample.ogg" type="audio/ogg"&gt;
  &lt;/audio&gt;
&lt;/div&gt;</pre><br>
                  <h2 class="uk-module-title">Video</h2>
                  <p>To create an video player, use the <code>[video]</code> shortcode</p>
                  <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-medium-1-2">
                      <div class="plyr">
                        <video controls="" poster="images/demo/video/poster.jpg">
                          <source src="images/demo/video/big_buck_bunny.mp4" type="video/mp4">
                          <source src="images/demo/video/big_buck_bunny.webm" type="video/webm">
                        </video>
                      </div>
                    </div>
                  </div><br>
                  <div class="uk-badge-note uk-badge">
                    markup
                  </div>
                  <pre>&lt;div class="plyr"&gt;
  &lt;video controls="" poster="images/demo/video/poster.jpg"&gt;
    &lt;source src="images/demo/video/big_buck_bunny.mp4" type="video/mp4"&gt;
    &lt;source src="images/demo/video/big_buck_bunny.webm" type="video/webm"&gt;
  &lt;/video&gt;
&lt;/div&gt;</pre><br>
                  <p>You can also stream youtube or vimeo videos using the player, by using the following shortcodes, where the <code>id</code> is the video id on the respective channel</p>
                  <h3 class="uk-module-title">Youtube</h3>
                  <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-medium-1-2">
                      <div data-video-id="YE7VzlLtp-4" data-video-type="youtube"></div>
                    </div>
                  </div><br>
                  <div class="uk-badge-note uk-badge">
                    markup
                  </div>
                  <pre>&lt;div data-video-id="YE7VzlLtp-4" data-video-type="youtube"&gt;&lt;/div&gt;</pre><br>
                  <h3 class="uk-module-title">Vimeo</h3>
                  <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-medium-1-2">
                      <div data-video-id="1084537" data-video-type="vimeo"></div>
                    </div>
                  </div><br>
                  <div class="uk-badge-note uk-badge">
                    markup
                  </div>
                  <pre>&lt;div data-video-id="1084537" data-video-type="vimeo"&gt;&lt;/div&gt;</pre>
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

