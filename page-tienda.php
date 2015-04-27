<?php
/*
	Template Name: Tienda 
*/
?>
<?php get_header() ?>
<div class="container main content">
  <div class="sixteen columns">
    <h1 class="center">Zerouv Sale + Clearance</h1>
    <div class="feature_divider"></div>
  </div>
  

  <div class="section clearfix">
    <div class="sixteen columns breadcrumb">
      <div class="eight columns breadcrumb_text alpha">        
          <span itemscope itemtype="">
            <a href="<?php echo get_option('home'); ?>" title="zeroUV" itemprop="url"><span itemprop="title">Home</span></a>
          </span> 
          &nbsp;<span class="icon-right-arrow"></span>
          <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="" title="Zerouv Sale + Clearance" itemprop="url">
              <span itemprop="title">Zerouv Sale + Clearance</span>
            </a>
          </span>            
          &nbsp;<span class="icon-right-arrow"></span>
          <span itemscope itemtype="">
            <a href="" title="cat eye" itemprop="url">
              <span itemprop="title">cat eye</span>
            </a>
          </span>
          &nbsp;<span class="icon-right-arrow"></span> Page 1 of 1               
      </div>
      <div class="four columns section_select omega offset-by-four">
        <label for="sort-by" class="inline">Sort by: </label> 
        <select id="sort-by">
          <option value="manual">Featured</option>
          <option value="best-selling">Best Selling</option>
          <option value="title-ascending">Alphabetically: A-Z</option>
          <option value="title-descending">Alphabetically: Z-A</option>
          <option value="price-ascending">Price: Low to High</option>
          <option value="price-descending">Price: High to Low</option>
          <option value="created-descending">Date: New to Old</option>
          <option value="created-ascending">Date: Old to New</option>
        </select>
        <script type="text/javascript">
          // <![CDATA[  
            $('#sort-by')
              .val('manual')
              .bind('change', function() {
                Shopify.queryParams.sort_by = $(this).val();
                location.search = $.param(Shopify.queryParams);
            });
          // ]]>
        </script>
      </div>
    </div>
  </div>

  <div class="sidebar four columns">
    <h4 class="toggle"><span>+</span>Tags</h4>
    <ul class="blog_list toggle_list">
      <li>
        <a  href="/collections/sale-wholesale">All Zerouv Sale + Clearance</a>
      </li>      
    </ul>    
    <h4 class="toggle"><span>+</span>Collections</h4>
    <ul class="blog_list toggle_list">
       <li ><a href="/collections/accessories" title="Accessories">Accessories</a></li>
    </ul>
  </div>
  <div class="twelve columns">      
    <div class="three columns alpha thumbnail even">
      <a href="/collections/sale-wholesale/products/high-pointed-retro-womens-fashion-sunglasses-8449">
        <div class="relative product_image">
          <img style="max-height:200px" src="//cdn.shopify.com/s/files/1/0193/6253/products/8449e_grande.jpg?v=1428476826" alt="Clear Brown Amber" />
          <span data-fancybox-href="#product-136536631" class="quick_shop ss-icon" data-gallery="product-136536631-gallery">
              &#x002B;
          </span>          
        </div>
        <div class="info">            
          <span class="title">High Pointed Retro Womens Fashion Sunglasses 8449</span>
          <span class="price sale">
            <small><em>from</em></small>
            <span class=money>$6.95 USD</span>
            <span class="was_price"><span class=money>$9.99 USD</span></span>          
          </span>
        </div>
      </a>
    </div>
    <div id="product-136536631" class="modal product-136536631">
      <div class="container section" style="width: inherit">
        <div class="eight columns" style="padding-left: 15px">
          <div class="flexslider product_gallery product-136536631-gallery  ">
            <ul class="slides">    
              <li data-thumb="//cdn.shopify.com/s/files/1/0193/6253/products/8449e_1024x1024.jpg?v=1428476826" data-title="Clear Brown Amber">
                <a href="//cdn.shopify.com/s/files/1/0193/6253/products/8449e.jpg?v=1428476826" class="fancybox" data-fancybox-group="136536631" title="Clear Brown Amber">
                  <img src="//cdn.shopify.com/s/files/1/0193/6253/t/11/assets/loader.gif?14900324192811030861" data-src="//cdn.shopify.com/s/files/1/0193/6253/products/8449e_1024x1024.jpg?v=1428476826" data-src-retina="//cdn.shopify.com/s/files/1/0193/6253/products/8449e_2048x2048.jpg?v=1428476826" alt="Clear Brown Amber" data-index="0" data-image-id="266574915" data-cloudzoom="zoomImage: '//cdn.shopify.com/s/files/1/0193/6253/products/8449e.jpg?v=1428476826', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " />
                </a>                        
              </li>
            </ul>
          </div>&nbsp;
        </div>
        <div class="six columns">
          <h3>High Pointed Retro Womens Fashion Sunglasses 8449</h3>
          <p class="modal_price">
            <span class="sold_out"></span>
            <span class="current_price sale"></span>
            <span class="was_price">              
              <span class=money>$9.99 USD</span>               
            </span>
          </p>
          <div class="notify_form notify-form-136536631" id="notify-form-136536631" style="display:none">
            <form action="/contact" method="post" data-first-variant="311919393" id="BIS_form" onsubmit="return createNotification136536631(this); return false;">
              <p>
                <label for="contact[email]">Notify me when this product is available:</label>
                <input required type="email" name="contact[email]" id="contact[email]" placeholder="Enter your email address..." value="" style="display:inline;margin-bottom:0px" />
                <span class="bis-integrations">
                <input class="bis-checkbox" value="1" type="checkbox"  checked="checked"  id="customer_accepts_marketing" name="customer_accepts_marketing">
                <label class="bis-checkbox-label" for="customer_accepts_marketing">Add me to the store mailing list</label>
                </span>
                <input class="submit" type="submit" value="Send" style="margin-bottom:0px" />    
              </p>
              <p class="BIS_response"></p>
            </form>
          </div>
          <style>
            .bis-integrations {
              margin-top: 4px;
              margin-bottom: 4px;
              display: block;
            }

            .bis-integrations .bis-checkbox {
              vertial-align: baseline;
            }

            .bis-integrations .bis-checkbox-label {
              display: inline-block;
            }


            @media only screen and (min-width: 1199px)  {
              #BIS_form input[type=submit] {
                margin-top: 8px;
              }
            }

            @media only screen and (min-width: 1199px)  {
              #BIS_form input[type=email] {
                width: 398px;
              }
            }
          </style>
          <script>
            var createNotification136536631 = function(form) {
              if (typeof BISMobiliaForm != 'undefined') {
                var bis = new BISMobiliaForm(form);
              }
              return false;
            };

            var clearBISResponse = function() { 
              $('#BIS_form .BIS_response').text('');
            };

            $(function() {
              $('#BIS_form input').on('focus change', clearBISResponse);
              $('.product_form select').on('change', clearBISResponse);

              // hide the Notify me form if the variant options combination does not exist
              var _origSelectCallback = window.selectCallback;
              window.selectCallback = function(variant, selector) {
                _origSelectCallback.apply(window, arguments);
                if (variant == null) {
                  $('#notify-form-136536631').stop().hide();
                }
              }
            });

          </script>
          <p>
            Designer inspired modified cateye frame that features a bold square shape and sharp pointed curves.  The always-sexy cat-eye look for classic style in an instant,...
            <a href="/collections/sale-wholesale/products/high-pointed-retro-womens-fashion-sunglasses-8449" class="view_product_info" title="High Pointed Retro Womens Fashion Sunglasses 8449 Details">View full product details <span class="icon-right-arrow"></span></a>
          </p>        
          <hr />        
          <form action="/cart/add" method="post" class="clearfix product_form" data-money-format="<span class=money>${{amount}} USD</span>" data-shop-currency="USD" id="product-form-136536631">            
              <div class="select">
                <label>Color:</label>
                <select id="product-select-136536631" name='id'>
                  
                    <option selected="selected" value="311919393">Black Lavender</option>
                  
                    <option  value="311919859">Clear Brown Amber</option>
                  
                    <option  value="876533529">Red Smoke</option>
                  
                    <option  value="1048456601">White Lavender</option>
                  
                    <option  value="876532357">Tortoise Amber</option>
                  
                </select>
              </div>         
         
            
              <div class="left">
                <label for="quantity">Qty:</label>
                <input type="number" min="1" size="2" class="quantity" name="quantity" id="quantity" value="1" />
              </div>
            
            <div class="purchase clearfix inline_purchase">
              
              <button type="submit" name="add" class="action_button add_to_cart"><span class="text">Add to Cart</button>
            </div>  
          </form>       
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>