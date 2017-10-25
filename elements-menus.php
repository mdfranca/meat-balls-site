
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
                    <h2 class="uk-module-title">Menus</h2>
                    
                    <p> To create a menu item with the food item, description and price, use the <code>tm-menu-item tm-menu-compound</code> class. You can place the <code>tm-menu-item</code> code within <code>&lt;div class="uk-panel-space"&gt;...&lt;/div&gt;</code> for better formatting and spacing.</p>
                    <br>
                    <div class="uk-badge-note uk-badge">markup</div>
                    <pre>&lt;div class="tm-menu-item tm-menu-compound"&gt;
&lt;h3 class="tm-menu-name"&gt;Tagliatelle Bolognese&lt;/h3&gt;

&lt;span class="tm-menu-dots"&gt;&lt;/span&gt;
&lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt;
&lt;span class="tm-menu-desc"&gt;Ground beef . tomato sauce . red wine . spices&lt;/span&gt;
&lt;/div&gt;</pre>
                    <br>
                    <p>You can also add badges to the menu items to indicate recommendations or notification e.g. Vegetarian dishes </p>
                    <div class="uk-badge-note uk-badge">markup</div>
                    <pre>&lt;div class="tm-menu-item tm-menu-compound"&gt;
&lt;h3 class="tm-menu-name"&gt;Tagliatelle Bolognese&lt;/h3&gt;

&lt;div class="uk-badge-danger uk-badge"&gt;hot&lt;/div&gt;
&lt;span class="tm-menu-dots"&gt;&lt;/span&gt;
&lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt;
&lt;span class="tm-menu-desc"&gt;Ground beef . tomato sauce . red wine . spices&lt;/span&gt;
&lt;/div&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Single Menu Item</h3>
                    <p> You can create a single line menu item by using the <code>tm-menu-item</code> class only, which only shows the menu name and price.</p>
                    <br>
                    <div class="uk-badge-note uk-badge">markup</div>
                    <pre>&lt;div class="tm-menu-item"&gt;
&lt;h3 class="tm-menu-name"&gt;Americano&lt;/h3&gt;

&lt;span class="tm-menu-dots"&gt;&lt;/span&gt;
&lt;span class="tm-menu-price"&gt;$ 1.50&lt;/span&gt;
&lt;/div&gt;</pre>
                    <br>
                    <h3 class="uk-module-title">Menu Item with image</h3>
                    <p> You can create a menu item with an image by using the following code, which will show a small sized photo of the food, menu name, description and price.</p>
                    <br>
                    <div class="uk-badge-note uk-badge">markup</div>
                    <pre>&lt;div class="tm-menu-item tm-menu-compound"&gt;
  &lt;div class="uk-grid" data-uk-grid-margin&gt;
    &lt;div class="uk-width-1-5"&gt;
      &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-9.jpg" width="72" height="72" alt="Baked potato jackets"&gt;
    &lt;/div&gt;

    &lt;div class="uk-width-4-5"&gt;
      &lt;div class="uk-margin-small-left"&gt;
        &lt;h3 class="tm-menu-name"&gt;Baked potato jackets&lt;/h3&gt;
        &lt;span class="tm-menu-dots"&gt;&lt;/span&gt;
        &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; 
        &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed&lt;/span&gt; &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
                    <br>
                    <p> By adding the menu items in a grid column, you can create a nicely formatted menu tables with different variety and coloration. </p>
                    <br>

                    <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin>
                      <div class="uk-panel uk-panel-space">
                        <div class="tm-menu-item tm-menu-compound">
                          <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-8.jpg" width="72" height="72" alt="Avocado shell stuffed"> </div>
                            <div class="uk-width-4-5">
                              <div class="uk-margin-small-left">
                                <h3 class="tm-menu-name">Avocado shell stuffed</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Caramelized onions . tomatoes . mashed potatoes</span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="tm-menu-item tm-menu-compound">
                          <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-9.jpg" width="72" height="72" alt="Baked potato jackets"> </div>
                            <div class="uk-width-4-5">
                              <div class="uk-margin-small-left">
                                <h3 class="tm-menu-name">Baked potato jackets</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed</span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="uk-panel uk-panel-space">
                        <div class="tm-menu-item tm-menu-compound">
                          <h3 class="tm-menu-name">Tagliatelle Bolognese</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 3.50</span> <span class="tm-menu-desc">Ground beef . tomato sauce . red wine . spices</span> </div>
                        <div class="tm-menu-item tm-menu-compound">
                          <h3 class="tm-menu-name">Agliolio Linguine</h3>
                          <div class="uk-badge-danger uk-badge">hot</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Caramelized onions . tomatoes . mashed potatoes. tilapia</span> </div>
                      </div>
                      <div class="uk-panel uk-panel-space tm-secondary-background uk-border-rounded">
                        <div class="uk-text-center">
                          <h3 class="uk-h2 uk-module-title-alt uk-margin-remove">Coffee</h3>
                          <h5 class="uk-margin-top-remove uk-margin-large-bottom">best way to start your day</h5> </div>
                        <div class="tm-menu-item">
                          <h3 class="tm-menu-name">Espresso</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 3.50</span> </div>
                        <div class="tm-menu-item">
                          <h3 class="tm-menu-name">Cappuccino</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 1.50</span> </div>
                        <div class="tm-menu-item">
                          <h3 class="tm-menu-name">Americano</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 1.50</span> </div>
                        <div class="tm-menu-item">
                          <h3 class="tm-menu-name">Caffe Latte</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 2.50</span> </div>
                      </div>
                    </div>
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion={showfirst:false,duration:300}>
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content"><code>&lt;div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-3" data-uk-grid-margin&gt;
  &lt;div class="uk-panel uk-panel-space"&gt;

    <!-- menu item with image -->
    &lt;div class="tm-menu-item tm-menu-compound"&gt;
      &lt;div class="uk-grid" data-uk-grid-margin&gt;
        &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-8.jpg" width="72" height="72" alt="Avocado shell stuffed"&gt; &lt;/div&gt;
        &lt;div class="uk-width-4-5"&gt;
          &lt;div class="uk-margin-small-left"&gt;
            &lt;h3 class="tm-menu-name"&gt;Avocado shell stuffed&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Caramelized onions . tomatoes . mashed potatoes&lt;/span&gt; &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    <!-- menu item with image -->
    &lt;div class="tm-menu-item tm-menu-compound"&gt;
      &lt;div class="uk-grid" data-uk-grid-margin&gt;
        &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-9.jpg" width="72" height="72" alt="Baked potato jackets"&gt; &lt;/div&gt;
        &lt;div class="uk-width-4-5"&gt;
          &lt;div class="uk-margin-small-left"&gt;
            &lt;h3 class="tm-menu-name"&gt;Baked potato jackets&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed&lt;/span&gt; &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="uk-panel uk-panel-space"&gt;

    <!-- menu item -->
    &lt;div class="tm-menu-item tm-menu-compound"&gt;
      &lt;h3 class="tm-menu-name"&gt;Tagliatelle Bolognese&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Ground beef . tomato sauce . red wine . spices&lt;/span&gt; &lt;/div&gt;
    
    <!-- menu item -->
    &lt;div class="tm-menu-item tm-menu-compound"&gt;
      &lt;h3 class="tm-menu-name"&gt;Agliolio Linguine&lt;/h3&gt;
      &lt;div class="uk-badge-danger uk-badge"&gt;hot&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Caramelized onions . tomatoes . mashed potatoes. tilapia&lt;/span&gt; &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="uk-panel uk-panel-space tm-secondary-background uk-border-rounded"&gt;
    &lt;div class="uk-text-center"&gt;
      &lt;h3 class="uk-h2 uk-module-title-alt uk-margin-remove"&gt;Coffee&lt;/h3&gt;
      &lt;h5 class="uk-margin-top-remove uk-margin-large-bottom"&gt;best way to start your day&lt;/h5&gt; &lt;/div&gt;
    
    &lt;div class="tm-menu-item"&gt;
      &lt;h3 class="tm-menu-name"&gt;Espresso&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt; &lt;/div&gt;
    
    &lt;div class="tm-menu-item"&gt;
      &lt;h3 class="tm-menu-name"&gt;Cappuccino&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 1.50&lt;/span&gt; &lt;/div&gt;
    
    &lt;div class="tm-menu-item"&gt;
      &lt;h3 class="tm-menu-name"&gt;Americano&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 1.50&lt;/span&gt; &lt;/div&gt;
    
    &lt;div class="tm-menu-item"&gt;
      &lt;h3 class="tm-menu-name"&gt;Caffe Latte&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 2.50&lt;/span&gt; &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code> </div>
                    </div>
                    <br>
                    <p>You can also add menus to a slideset to show them in tabular form using the <code><i>[</i>menu_tabs]</code> shortcode.</p>
                    <br>

                    <div class="tm-slideset-gaucho" data-uk-slideset="{default: 1, animation: 'fade'}">
                      <ul class="uk-subnav uk-flex-center">
                        <li data-uk-filter=""><a href="#">All</a> </li>
                        <li data-uk-filter="appetizers"><a href="#">appetizers</a> </li>
                        <li data-uk-filter="breakfast"><a href="#">breakfast</a> </li>
                        <li data-uk-filter="pasta"><a href="#">pasta</a> </li>
                      </ul>
                      <div class="uk-slidenav-position uk-margin">
                        <ul class="uk-grid uk-slideset uk-grid-match uk-flex-center">
                          <li data-uk-filter="appetizers">
                            <div class="uk-panel uk-text-left">
                              <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin>
                                <div class="uk-panel uk-panel-space">
                                  <div class="tm-menu-item tm-menu-compound">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-7.jpg" width="72" height="72" alt="classic nachos"> </div>
                                      <div class="uk-width-4-5">
                                        <div class="uk-margin-small-left">
                                          <h3 class="tm-menu-name">classic nachos</h3>
                                          <div class="uk-badge-danger uk-badge">hot</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Corn chips topped with cheese sauce, served with sour cream, guacamole &amp; pico de gallo</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-8.jpg" width="72" height="72" alt="Avocado shell stuffed"> </div>
                                      <div class="uk-width-4-5">
                                        <div class="uk-margin-small-left">
                                          <h3 class="tm-menu-name">Avocado shell stuffed</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Caramelized onions . tomatoes . mashed potatoes. tilapia</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-9.jpg" width="72" height="72" alt="Baked potato jackets"> </div>
                                      <div class="uk-width-4-5">
                                        <div class="uk-margin-small-left">
                                          <h3 class="tm-menu-name">Baked potato jackets</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="uk-panel uk-panel-space">
                                  <div class="tm-menu-item tm-menu-compound">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-10.jpg" width="72" height="72" alt="nachos grande"> </div>
                                      <div class="uk-width-4-5">
                                        <div class="uk-margin-small-left">
                                          <h3 class="tm-menu-name">nachos grande</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 3.50</span> <span class="tm-menu-desc">Corn chips. Mexican fried chili beans. sour cream. guacamole &amp; salsa.  chili lamb mince</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-11.jpg" width="72" height="72" alt="quesadillas acapulco"> </div>
                                      <div class="uk-width-4-5">
                                        <div class="uk-margin-small-left">
                                          <h3 class="tm-menu-name">quesadillas acapulco</h3>
                                          <div class="uk-badge-note uk-badge-notification uk-badge">v</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 2.50</span> <span class="tm-menu-desc">A flour tortilla. cheese tomatoes jalapeño. fresh cilantro. vegetable arrabbiata</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-1-5"> <img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-12.jpg" width="72" height="72" alt="mexican taco shells"> </div>
                                      <div class="uk-width-4-5">
                                        <div class="uk-margin-small-left">
                                          <h3 class="tm-menu-name">mexican taco shells</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li data-uk-filter="breakfast">
                            <div class="uk-panel uk-text-left">
                              <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin>
                                <div class="uk-panel uk-panel-space">
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">daily cheese sandwich</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">tuna salad</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Caramelized onions . tomatoes . mashed potatoes. tilapia</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">ham &amp; cheese sandwich</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">halloumi fromage</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 7.50</span> <span class="tm-menu-desc">Chicken . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                </div>
                                <div class="uk-panel uk-panel-space">
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">French Salad</h3>
                                    <div class="uk-badge-note uk-badge-notification uk-badge">v</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 3.50</span> <span class="tm-menu-desc">Green vegetables . spiced bread crumbs . chips or mashed potatoes . french dressing</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">club omelette</h3>
                                    <div class="uk-badge-danger uk-badge">hot</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Caramelized onions . tomatoes . mashed potatoes. tilapia</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">belgian waffles</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">pancake stack</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 7.50</span> <span class="tm-menu-desc">Chicken . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li data-uk-filter="pasta">
                            <div class="uk-panel uk-text-left">
                              <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin>
                                <div class="uk-panel uk-panel-space">
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Penne Arrabiata</h3>
                                    <div class="uk-badge-note uk-badge-notification uk-badge">v</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Tomato sauce . parsley . snap peas . parmesan . red chilli (chilli – optional)</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Linguine Dania</h3>
                                    <div class="uk-badge-note uk-badge-notification uk-badge">v</div> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Tomato sauce . garlic . parsley . mascarpone</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Gaucho Pesto</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Linguini Carbonara</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 7.50</span> <span class="tm-menu-desc">Bacon .egg . cream . fried onion . parmesan</span> </div>
                                </div>
                                <div class="uk-panel uk-panel-space">
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Tagliatelle Bolognese</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 3.50</span> <span class="tm-menu-desc">Ground beef . tomato sauce . red wine . spices</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Agliolio Linguine</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 8.50</span> <span class="tm-menu-desc">Caramelized onions . tomatoes . mashed potatoes. tilapia</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Creamed Mushroom Penne</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 6.50</span> <span class="tm-menu-desc">Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                  <div class="tm-menu-item tm-menu-compound">
                                    <h3 class="tm-menu-name">Butternut Ravioli</h3> <span class="tm-menu-dots"></span> <span class="tm-menu-price">$ 7.50</span> <span class="tm-menu-desc">Chicken . spiced bread crumbs . chips or mashed potatoes . aioli sauce</span> </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <ul class="uk-slideset-nav uk-dotnav uk-flex-center uk-margin-bottom-remove">
                          <li data-uk-slideset-item="0">
                            <a></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <br>
                    <div class="tm-toggle tm-toggle-code uk-accordion" data-uk-accordion={showfirst:false,duration:300}>
                      <h3 class="uk-accordion-title"><i class="tm-toggle-button uk-float-left"></i>Show code</h3>
                      <div class="uk-accordion-content"><code>&lt;div class="tm-slideset-gaucho" data-uk-slideset="{default: 1, animation: 'fade'}"&gt;
  &lt;ul class="uk-subnav uk-flex-center"&gt;
    &lt;li data-uk-filter=""&gt;&lt;a href="#"&gt;All&lt;/a&gt; &lt;/li&gt;
    &lt;li data-uk-filter="appetizers"&gt;&lt;a href="#"&gt;appetizers&lt;/a&gt; &lt;/li&gt;
    &lt;li data-uk-filter="breakfast"&gt;&lt;a href="#"&gt;breakfast&lt;/a&gt; &lt;/li&gt;
    &lt;li data-uk-filter="pasta"&gt;&lt;a href="#"&gt;pasta&lt;/a&gt; &lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="uk-slidenav-position uk-margin"&gt;
    &lt;ul class="uk-grid uk-slideset uk-grid-match uk-flex-center"&gt;
      &lt;li data-uk-filter="appetizers"&gt;
        &lt;div class="uk-panel uk-text-left"&gt;
          &lt;div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin&gt;
            &lt;div class="uk-panel uk-panel-space"&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;div class="uk-grid" data-uk-grid-margin&gt;
                  &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-7.jpg" width="72" height="72" alt="classic nachos"&gt; &lt;/div&gt;
                  &lt;div class="uk-width-4-5"&gt;
                    &lt;div class="uk-margin-small-left"&gt;
                      &lt;h3 class="tm-menu-name"&gt;classic nachos&lt;/h3&gt;
                      &lt;div class="uk-badge-danger uk-badge"&gt;hot&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Corn chips topped with cheese sauce, served with sour cream, guacamole &amp; pico de gallo&lt;/span&gt; &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;div class="uk-grid" data-uk-grid-margin&gt;
                  &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-8.jpg" width="72" height="72" alt="Avocado shell stuffed"&gt; &lt;/div&gt;
                  &lt;div class="uk-width-4-5"&gt;
                    &lt;div class="uk-margin-small-left"&gt;
                      &lt;h3 class="tm-menu-name"&gt;Avocado shell stuffed&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Caramelized onions . tomatoes . mashed potatoes. tilapia&lt;/span&gt; &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;div class="uk-grid" data-uk-grid-margin&gt;
                  &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-9.jpg" width="72" height="72" alt="Baked potato jackets"&gt; &lt;/div&gt;
                  &lt;div class="uk-width-4-5"&gt;
                    &lt;div class="uk-margin-small-left"&gt;
                      &lt;h3 class="tm-menu-name"&gt;Baked potato jackets&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="uk-panel uk-panel-space"&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;div class="uk-grid" data-uk-grid-margin&gt;
                  &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-10.jpg" width="72" height="72" alt="nachos grande"&gt; &lt;/div&gt;
                  &lt;div class="uk-width-4-5"&gt;
                    &lt;div class="uk-margin-small-left"&gt;
                      &lt;h3 class="tm-menu-name"&gt;nachos grande&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Corn chips. Mexican fried chili beans. sour cream. guacamole &amp; salsa.  chili lamb mince&lt;/span&gt; &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;div class="uk-grid" data-uk-grid-margin&gt;
                  &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-11.jpg" width="72" height="72" alt="quesadillas acapulco"&gt; &lt;/div&gt;
                  &lt;div class="uk-width-4-5"&gt;
                    &lt;div class="uk-margin-small-left"&gt;
                      &lt;h3 class="tm-menu-name"&gt;quesadillas acapulco&lt;/h3&gt;
                      &lt;div class="uk-badge-note uk-badge-notification uk-badge"&gt;v&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 2.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;A flour tortilla. cheese tomatoes jalapeño. fresh cilantro. vegetable arrabbiata&lt;/span&gt; &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;div class="uk-grid" data-uk-grid-margin&gt;
                  &lt;div class="uk-width-1-5"&gt; &lt;img class="uk-align-left uk-thumbnail uk-border-circle" src="images/demo/menu/food-12.jpg" width="72" height="72" alt="mexican taco shells"&gt; &lt;/div&gt;
                  &lt;div class="uk-width-4-5"&gt;
                    &lt;div class="uk-margin-small-left"&gt;
                      &lt;h3 class="tm-menu-name"&gt;mexican taco shells&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/li&gt;
      &lt;li data-uk-filter="breakfast"&gt;
        &lt;div class="uk-panel uk-text-left"&gt;
          &lt;div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin&gt;
            &lt;div class="uk-panel uk-panel-space"&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;daily cheese sandwich&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;tuna salad&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Caramelized onions . tomatoes . mashed potatoes. tilapia&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;ham &amp; cheese sandwich&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;halloumi fromage&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 7.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="uk-panel uk-panel-space"&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;French Salad&lt;/h3&gt;
                &lt;div class="uk-badge-note uk-badge-notification uk-badge"&gt;v&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Green vegetables . spiced bread crumbs . chips or mashed potatoes . french dressing&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;club omelette&lt;/h3&gt;
                &lt;div class="uk-badge-danger uk-badge"&gt;hot&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Caramelized onions . tomatoes . mashed potatoes. tilapia&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;belgian waffles&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;pancake stack&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 7.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/li&gt;
      &lt;li data-uk-filter="pasta"&gt;
        &lt;div class="uk-panel uk-text-left"&gt;
          &lt;div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-2" data-uk-grid-margin&gt;
            &lt;div class="uk-panel uk-panel-space"&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Penne Arrabiata&lt;/h3&gt;
                &lt;div class="uk-badge-note uk-badge-notification uk-badge"&gt;v&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Tomato sauce . parsley . snap peas . parmesan . red chilli (chilli – optional)&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Linguine Dania&lt;/h3&gt;
                &lt;div class="uk-badge-note uk-badge-notification uk-badge"&gt;v&lt;/div&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Tomato sauce . garlic . parsley . mascarpone&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Gaucho Pesto&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Linguini Carbonara&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 7.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Bacon .egg . cream . fried onion . parmesan&lt;/span&gt; &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="uk-panel uk-panel-space"&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Tagliatelle Bolognese&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 3.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Ground beef . tomato sauce . red wine . spices&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Agliolio Linguine&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 8.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Caramelized onions . tomatoes . mashed potatoes. tilapia&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Creamed Mushroom Penne&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 6.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken breast . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
              
              &lt;!-- menu item --&gt;
              &lt;div class="tm-menu-item tm-menu-compound"&gt;
                &lt;h3 class="tm-menu-name"&gt;Butternut Ravioli&lt;/h3&gt; &lt;span class="tm-menu-dots"&gt;&lt;/span&gt; &lt;span class="tm-menu-price"&gt;$ 7.50&lt;/span&gt; &lt;span class="tm-menu-desc"&gt;Chicken . spiced bread crumbs . chips or mashed potatoes . aioli sauce&lt;/span&gt; &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class="uk-slideset-nav uk-dotnav uk-flex-center uk-margin-bottom-remove"&gt;
      &lt;li data-uk-slideset-item="0"&gt;
        &lt;a&gt;&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</code> </div>
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

