
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
                    <p>Use the <code>data-uk-slideshow</code> data attribute to show images with nice transitions. To make a slideshow fill the entire page, use the <code>uk-slideshow-fullscreen</code> class.</p>

                    <!-- toggle code -->
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;div class="tm-slideshow-gaucho uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'fade', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: false}"&gt;
  &lt;ul class="uk-slideshow uk-overlay-active"&gt;

    &lt;!-- slide 1 --&gt;
    &lt;li&gt;
      &lt;img src="images/demo/default/slider/1.jpg" width="1400" height="1024" alt="demo"&gt;
      &lt;div class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-top"&gt;
        &lt;h3&gt;This is a title&lt;/h3&gt;
        &lt;div&gt;&lt;p&gt;Your caption goes here&lt;/p&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;

    &lt;!-- slide 2 --&gt;
    &lt;li&gt;
      &lt;img src="images/demo/default/slider/2.jpg" width="1400" height="1024" alt="demo"&gt;
      &lt;div class="uk-overlay-panel uk-overlay-bottom uk-overlay-slide-top"&gt;
        &lt;h3&gt;This is a title&lt;/h3&gt;
        &lt;div&gt;&lt;p&gt;Your caption goes here&lt;/p&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;

  &lt;/ul&gt;

  &lt;!-- navigation buttons --&gt;
  &lt;ul class="uk-dotnav uk-position-top uk-flex-right"&gt;
    &lt;li data-uk-slideshow-item="0"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li data-uk-slideshow-item="1"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;

  &lt;!-- navigation arrows --&gt;
  &lt;a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"&gt;&lt;/a&gt;
  &lt;a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"&gt;&lt;/a&gt;
&lt;/div&gt;</code>
                      </div>
                    </div>

                    <p>The following are the parameters required when using the <code>uk-slideshow</code> class:</p>

                    <table class="uk-table">
                      <thead>
                        <tr>
                          <th class="uk-width-1-4">Parameters</th>
                          <th class="uk-width-3-4">Description</th>
                        </tr>
                      </thead>
                    <tbody>
                      <tr>
                        <td><code>style</code></td>
                        <td>Defines the slideshow style. This parameter cannot be left blank. You can set the style as <code>default</code> or <code>classic</code> </td>
                      </tr>
                      <tr>
                        <td><code>autoplay</code></td>
                        <td>Set it to true to have the slideshow play automatically. Otherwise, set to false to stop the automatic play. </td>
                      </tr>
                      <tr>
                        <td><code>animation</code></td>
                        <td>Set the transition animation between slides</td>
                      </tr>
                      <tr>
                        <td><code>transition_duration</code></td>
                        <td>set the duration for the transition animation</td>
                      </tr>
                      <tr>
                        <td><code>autoplay_interval</code></td>
                        <td>Set the duration between switching slideshow items</td>
                      </tr>
                      <tr>
                        <td><code>kenburns</code></td>
                        <td>Set it to true or false to enable/disable kenburns effect to an image</td>
                      </tr>
                    </tbody>
                    </table>
                    <br>

                    <p>See the <a href="http://getuikit.com/docs/slideshow.html#animations" target="_blank">UIkit documentation</a> on the available animations available for the slideshow component</p><br>

                    <h3 class="uk-module-title uk-margin-top">Default Slideshow</h3>

                    <!-- slider -->
                    <div class="tm-slideshow-default uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scale', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: false}">

                      <!-- slider images -->
                      <ul class="uk-slideshow uk-overlay-active">

                        <!-- slide 1 -->
                        <li>
                          <img src="images/demo/default/slider/1.jpg" width="1400" height="1024" alt="demo">
                        </li>

                        <!-- slide 2 -->
                        <li>
                          <img src="images/demo/default/slider/2.jpg" width="1400" height="1024" alt="demo">
                        </li>

                        <!-- slide 3 -->
                        <li>
                          <img src="images/demo/default/slider/3.jpg" width="1400" height="1024" alt="demo">
                        </li>
                      </ul>

                      <!-- slide navigation buttons -->
                      <div class="uk-margin">
                        <ul class="uk-dotnav uk-flex-center uk-hidden-touch">
                          <li data-uk-slideshow-item="0"><a href=""></a></li>
                          <li data-uk-slideshow-item="1"><a href=""></a></li>
                          <li data-uk-slideshow-item="2"><a href=""></a></li>
                        </ul>
                      </div>

                      <!-- slide navigation arrows -->
                      <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                      <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"></a>

                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <!-- toggle -->
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;div class="tm-slideshow-default uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scale', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: false}"&gt;
  &lt;ul class="uk-slideshow uk-overlay-active"&gt;
    &lt;li&gt;&lt;img src="images/demo/default/slider/1.jpg" width="1400" height="1024" alt="demo"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img src="images/demo/default/slider/2.jpg" width="1400" height="1024" alt="demo"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img src="images/demo/default/slider/3.jpg" width="1400" height="1024" alt="demo"&gt;&lt;/li&gt;
  &lt;/ul&gt;

  &lt;div class="uk-margin"&gt;
    &lt;ul class="uk-dotnav uk-flex-center uk-hidden-touch"&gt;
      &lt;li data-uk-slideshow-item="0"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li data-uk-slideshow-item="1"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li data-uk-slideshow-item="2"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;

  &lt;a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous"&gt;&lt;/a&gt;
  &lt;a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next"&gt;&lt;/a&gt;
&lt;/div&gt;</code>
                      </div>
                    </div>

                    <br>
                    <h3 class="uk-module-title uk-margin-top">Classic Slideshow</h3>
                    <br>

                    <!-- slider -->
                    <div class="tm-slideshow-gaucho uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scale', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: true}">
                      <ul class="uk-slideshow uk-overlay-active">

                        <!-- slide 1 -->
                        <li> <img src="images/demo/default/slider/1.jpg" width="1400" height="1024" alt="image">
                          <div class="uk-overlay-panel uk-flex uk-flex-middle uk-overlay-slide-left">
                            <div>
                              <h3>This is a title</h3>
                              <div class="uk-margin">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                              </div> <a class="uk-button-default uk-button-large uk-button" href="#" target="_self">Learn more</a> </div>
                          </div>
                        </li>

                        <!-- slide 2 -->
                        <li> <img src="images/demo/default/slider/2.jpg" width="1400" height="1024" alt="image">
                          <div class="uk-overlay-panel uk-flex uk-flex-middle uk-overlay-slide-left">
                            <div>
                              <h3>Another title</h3>
                              <div class="uk-margin">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div> <a class="uk-button-default uk-button-large uk-button" href="#" target="_self">Learn more</a> </div>
                          </div>
                        </li>

                        <!-- slide 3 -->
                        <li> <img src="images/demo/default/slider/3.jpg" width="1400" height="1024" alt="image">
                          <div class="uk-overlay-panel uk-flex uk-flex-middle uk-overlay-slide-left">
                            <div>
                              <h3>A simple title</h3>
                              <div class="uk-margin">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                              </div> <a class="uk-button-default uk-button-large uk-button" href="#" target="_self">Learn more</a> </div>
                          </div>
                        </li>
                      </ul>

                      <!-- navigation buttons -->
                      <div class="uk-margin">
                        <ul class="uk-dotnav uk-flex-right uk-hidden-touch">
                          <li data-uk-slideshow-item="0"><a href=""></a></li>
                          <li data-uk-slideshow-item="1"><a href=""></a></li>
                          <li data-uk-slideshow-item="2"><a href=""></a></li>
                        </ul>
                      </div>

                      <!-- navigation arrows -->
                      <div class="tm-slidenav uk-flex uk-flex-right uk-flex-middle">
                        <a href="" class="uk-slidenav uk-slidenav-previous uk-hidden-touch" data-uk-slideshow-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-next uk-hidden-touch" data-uk-slideshow-item="next"></a>
                      </div>
                    </div>

                    <br>
                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <!-- toggle -->
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;div class="tm-slideshow-gaucho uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scale', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: true}"&gt;
  &lt;ul class="uk-slideshow uk-overlay-active"&gt;

    &lt;!-- slide 1 --&gt;
    &lt;li&gt; &lt;img src="images/demo/default/slider/1.jpg" width="1400" height="1024" alt="image"&gt;
      &lt;div class="uk-overlay-panel uk-flex uk-flex-middle uk-overlay-slide-left"&gt;
        &lt;div&gt;
          &lt;h3&gt;This is a title&lt;/h3&gt;
          &lt;div class="uk-margin"&gt;
            &lt;p&gt;This is a caption. &lt;/p&gt;
          &lt;/div&gt; &lt;a class="uk-button-default uk-button-large uk-button" href="#" target="_self"&gt;Learn more&lt;/a&gt; &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;

    &lt;!-- slide 2 --&gt;
    &lt;li&gt; &lt;img src="images/demo/default/slider/2.jpg" width="1400" height="1024" alt="image"&gt;
      &lt;div class="uk-overlay-panel uk-flex uk-flex-middle uk-overlay-slide-left"&gt;
        &lt;div&gt;
          &lt;h3&gt;Another title&lt;/h3&gt;
          &lt;div class="uk-margin"&gt;
            &lt;p&gt;This is a caption.&lt;/p&gt;
          &lt;/div&gt; &lt;a class="uk-button-default uk-button-large uk-button" href="#" target="_self"&gt;Learn more&lt;/a&gt; &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;

    &lt;!-- slide 3 --&gt;
    &lt;li&gt; &lt;img src="images/demo/default/slider/3.jpg" width="1400" height="1024" alt="image"&gt;
      &lt;div class="uk-overlay-panel uk-flex uk-flex-middle uk-overlay-slide-left"&gt;
        &lt;div&gt;
          &lt;h3&gt;A simple title&lt;/h3&gt;
          &lt;div class="uk-margin"&gt;
            &lt;p&gt;This is a caption. &lt;/p&gt;
          &lt;/div&gt; &lt;a class="uk-button-default uk-button-large uk-button" href="#" target="_self"&gt;Learn more&lt;/a&gt; &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
  &lt;/ul&gt;

  &lt;!-- navigation buttons --&gt;
  &lt;div class="uk-margin"&gt;
    &lt;ul class="uk-dotnav uk-flex-right uk-hidden-touch"&gt;
      &lt;li data-uk-slideshow-item="0"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li data-uk-slideshow-item="1"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li data-uk-slideshow-item="2"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;

  &lt;!-- navigation arrows --&gt;
  &lt;div class="tm-slidenav uk-flex uk-flex-right uk-flex-middle"&gt;
    &lt;a href="" class="uk-slidenav uk-slidenav-previous uk-hidden-touch" data-uk-slideshow-item="previous"&gt;&lt;/a&gt;
    &lt;a href="" class="uk-slidenav uk-slidenav-next uk-hidden-touch" data-uk-slideshow-item="next"&gt;&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code>
                      </div>
                    </div>

                    <br>

                    <h3 class="uk-module-title uk-margin-top">Testimonials in slideshow</h3>

                    <!-- testimonial slider -->
                    <div class="tm-slideshow-default uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scroll', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: false}">
                      <ul class="uk-slideshow uk-overlay-active">
                        
                        <!-- testimonial 1 -->
                        <li>
                          <blockquote class="tm-testimonial uk-clearfix uk-text-center"><i class="quote-icon uk-icon-7s-chat"></i>
                            <p><img class="tm-testimonial-avatar uk-align-center uk-margin-top uk-border-circle" src="images/demo/avatar/client-1-thumb.png" alt="Gary Long" width="64" height="64">Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p> 
                            <span class="author uk-margin-top">Gary Long</span> 
                            <span class="jobtitle">CEO</span> </blockquote>
                        </li>

                        <!-- testimonial 2 -->
                        <li>
                          <blockquote class="tm-testimonial uk-clearfix uk-text-center"><i class="quote-icon uk-icon-7s-chat"></i>
                            <p><img class="tm-testimonial-avatar uk-align-center uk-margin-top uk-border-circle" src="images/demo/avatar/client-2-thumb.png" alt="Lori Carroll" width="64" height="64">Do not dream of the future, concentrate the mind on the present moment. Dream big. Go forward Never allow yourself to be made a victim. Accept no one's definition.</p> 
                            <span class="author uk-margin-top">Lori Carroll</span> 
                            <span class="jobtitle">Chief Editor</span> </blockquote>
                        </li>

                        <!-- testimonial 3 -->
                        <li>
                          <blockquote class="tm-testimonial uk-clearfix uk-text-center"><i class="quote-icon uk-icon-7s-chat"></i>
                            <p><img class="tm-testimonial-avatar uk-align-center uk-margin-top uk-border-circle" src="images/demo/avatar/client-3-thumb.png" alt="Paul Morgan" width="64" height="64">Everything should be as simple as it is, but not simpler; Believe that life is worth living and your belief will help create the fact. We help your ideas come to life.</p> 
                            <span class="author uk-margin-top">Paul Morgan</span> 
                            <span class="jobtitle">Creative Designer</span> </blockquote>
                        </li>
                      </ul>

                      <!-- navigation bullets -->
                      <div class="uk-margin">
                        <ul class="uk-dotnav uk-flex-center uk-hidden-touch">
                          <li data-uk-slideshow-item="0"><a href=""></a></li>
                          <li data-uk-slideshow-item="1"><a href=""></a></li>
                          <li data-uk-slideshow-item="2"><a href=""></a></li>
                        </ul>
                      </div>

                      <!-- navigation arrows -->
                      <div class="tm-slidenav uk-flex uk-flex-right uk-flex-middle">
                        <a href="" class="uk-slidenav uk-slidenav-previous uk-hidden-touch" data-uk-slideshow-item="previous"></a>
                        <a href="" class="uk-slidenav uk-slidenav-next uk-hidden-touch" data-uk-slideshow-item="next"></a>
                      </div>
                    </div>

                    <br>

                    <div class="uk-badge-note uk-margin-top uk-badge">markup</div>

                    <!-- toggle -->
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion="{showfirst:false,duration:300}">
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content">
                        <code>&lt;div class="tm-slideshow-default uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scroll', pauseOnHover: true, duration: 500, autoplayInterval: 10000, kenburns: false}"&gt;
  &lt;ul class="uk-slideshow uk-overlay-active"&gt;
    
    &lt;!-- testimonial 1 --&gt;
    &lt;li&gt;
      &lt;blockquote class="tm-testimonial uk-clearfix uk-text-center"&gt;&lt;i class="quote-icon uk-icon-7s-chat"&gt;&lt;/i&gt;
        &lt;p&gt;&lt;img class="tm-testimonial-avatar uk-align-center uk-margin-top uk-border-circle" src="images/demo/avatar/client-1-thumb.png" alt="Gary Long" width="64" height="64"&gt;Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.&lt;/p&gt; 
        &lt;span class="author uk-margin-top"&gt;Gary Long&lt;/span&gt; 
        &lt;span class="jobtitle"&gt;CEO&lt;/span&gt; &lt;/blockquote&gt;
    &lt;/li&gt;

    &lt;!-- testimonial 2 --&gt;
    &lt;li&gt;
      &lt;blockquote class="tm-testimonial uk-clearfix uk-text-center"&gt;&lt;i class="quote-icon uk-icon-7s-chat"&gt;&lt;/i&gt;
        &lt;p&gt;&lt;img class="tm-testimonial-avatar uk-align-center uk-margin-top uk-border-circle" src="images/demo/avatar/client-2-thumb.png" alt="Lori Carroll" width="64" height="64"&gt;Do not dream of the future, concentrate the mind on the present moment. Dream big. Go forward Never allow yourself to be made a victim. Accept no one's definition.&lt;/p&gt; 
        &lt;span class="author uk-margin-top"&gt;Lori Carroll&lt;/span&gt; 
        &lt;span class="jobtitle"&gt;Chief Editor&lt;/span&gt; &lt;/blockquote&gt;
    &lt;/li&gt;

    &lt;!-- testimonial 3 --&gt;
    &lt;li&gt;
      &lt;blockquote class="tm-testimonial uk-clearfix uk-text-center"&gt;&lt;i class="quote-icon uk-icon-7s-chat"&gt;&lt;/i&gt;
        &lt;p&gt;&lt;img class="tm-testimonial-avatar uk-align-center uk-margin-top uk-border-circle" src="images/demo/avatar/client-3-thumb.png" alt="Paul Morgan" width="64" height="64"&gt;Everything should be as simple as it is, but not simpler; Believe that life is worth living and your belief will help create the fact. We help your ideas come to life.&lt;/p&gt; 
        &lt;span class="author uk-margin-top"&gt;Paul Morgan&lt;/span&gt; 
        &lt;span class="jobtitle"&gt;Creative Designer&lt;/span&gt; &lt;/blockquote&gt;
    &lt;/li&gt;
  &lt;/ul&gt;

  &lt;!-- navigation bullets --&gt;
  &lt;div class="uk-margin"&gt;
    &lt;ul class="uk-dotnav uk-flex-center uk-hidden-touch"&gt;
      &lt;li data-uk-slideshow-item="0"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li data-uk-slideshow-item="1"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
      &lt;li data-uk-slideshow-item="2"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;

  &lt;!-- navigation arrows --&gt;
  &lt;div class="tm-slidenav uk-flex uk-flex-right uk-flex-middle"&gt;
    &lt;a href="" class="uk-slidenav uk-slidenav-previous uk-hidden-touch" data-uk-slideshow-item="previous"&gt;&lt;/a&gt;
    &lt;a href="" class="uk-slidenav uk-slidenav-next uk-hidden-touch" data-uk-slideshow-item="next"&gt;&lt;/a&gt;
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

