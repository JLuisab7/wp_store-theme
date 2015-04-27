      <div class="footer">
        <div class="container">
          <div class="seven columns">            
            <h6>Follow</h6>            
              <a href="http://twitter.com/zerouv" title="zeroUV on Twitter" class="ss-icon" rel="me" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>            
              <a href="http://facebook.com/zerouv" title="zeroUV on Facebook" class="ss-icon" rel="me" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>              
              <a href="https://www.pinterest.com/zerouv/" title="zeroUV on Pinterest" class="ss-icon" rel="me" target="_blank">
                <i class="fa fa-pinterest-p"></i>
              </a>              
              <a href="http://zerouv.tumblr.com/" title="zeroUV on Tumblr" class="ss-icon" rel="me" target="_blank">
                <i class="fa fa-tumblr"></i>
              </a>              
              <a href="http://instagram.com/zerouv" title="zeroUV on Instagram" class="ss-icon" rel="me" target="_blank"> 
                <i class="fa fa-instagram"></i>
              </a>              
              <a href="mailto:shop@zerouv.com" title="Email zeroUV" class="ss-icon" target="_blank">
                <i class="fa fa-envelope-o"></i>
              </a>
            </h6>            
          </div>
          <div class="nine columns">
            <ul class="footer_menu">
              <li><a href="/pages/authorized-distributors" title="Authorized Distributors">Authorized Distributors</a></li>            
              <li><a href="/pages/terms-of-service" title="Terms & Conditions">Terms & Conditions</a></li>            
              <li><a href="/pages/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
            </ul>
            <p>Sign up to get the latest on sales, new releases and more …</p>
            <div class="newsletter ">
              <p class="message"></p>
              <form action="http://myshopify.us6.list-manage.com/subscribe/post?u=6324690949492d0d093b3553c&amp;id=0b71dd7785" method="post" name="mc-embedded-subscribe-form" class="contact-form" target="_blank">
                <input type="email" value="" name="EMAIL" class="contact_email" placeholder="Enter your email address...">
                <input type="submit" value="Sign Up" class="action_button sign_up" name="subscribe" />
              </form>
            </div>

            <p class="mobile_only"></p>
            <p class="credits">
              &copy; 2015 zeroUV. ® Registered Trademark
              <br />
            </p>          
            <div class="payment_methods ">
              <img src="<?php bloginfo('template_url'); ?>/images/cards/cc-paypal.png" alt="PayPal" />              
              <img src="<?php bloginfo('template_url'); ?>/images/cards/cc-visa.png" alt="Visa" />
              <img src="<?php bloginfo('template_url'); ?>/images/cards/cc-mastercard.png" alt="Mastercard" />
              <img src="<?php bloginfo('template_url'); ?>/images/cards/cc-amex.png" alt="American Express" />
              <img src="<?php bloginfo('template_url'); ?>/images/cards/cc-discover.png" alt="Discover" />
            </div>
          </div>
        </div>
      </div> 
      <div id="search" class="animated">
        <div class="container">
          <div class="ten columns offset-by-three center">
            <form action="/search">
              <input type="hidden" name="type" value="product" />
              <div class="search-close ss-icon">&#x2421;</div>
              <span class="icon-search search-submit"></span>
              <input type="text" name="q" placeholder="Search " value="" autocapitalize="off" autocomplete="off" autocorrect="off" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a id="newsletter" href="#target"></a>
  <div style="display: none;">
    <div id="target">
      <div class="newsletter ">
        <p class="message"></p>
        <form action="" method="post" name="mc-embedded-subscribe-form" class="contact-form" target="_blank">
          <input type="email" value="" name="EMAIL" class="contact_email" placeholder="Enter your email address...">
          <input type="submit" value="Sign Up" class="action_button sign_up" name="subscribe" />
        </form>
      </div>
    </div>
  </div>
  <!-- script para el popUp de newsltter -->
  <script type="text/javascript">
    function openNewsletterPopup() {
      
        $.get("/pages/sign-up-for-emails.json", function(data) {
        $("#target").prepend("<h1>" + data["page"]["title"] + "</h1>" + data["page"]["body_html"]);
        });
          
      setTimeout( function() {
        $('#newsletter').fancybox({maxWidth: 450});
        $('#newsletter').trigger('click'); 
      }, 
      2*1000);
    }

    $(function() {
      var popup = $.cookie('popup');
      var cookie_enabled = true;

      if (cookie_enabled && popup == 'open') {
          return false;
      } else {
        openNewsletterPopup();
      }
      if (cookie_enabled) {
        $.cookie('popup', 'open', { expires: 30 });
      }
    });
  </script>
  <input type="hidden" name="_pc_params" value="" />
  <?php wp_footer(); ?>
</body>
</html>
