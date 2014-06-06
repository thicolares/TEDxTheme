<?php
  $template_url = get_template_directory_uri();
?>
<div class="black-bg">
  <div class="container">
    <footer>
      <div class="row">
        <div class="col-md-4">
          <div class="legal">
            This TEDx event is independently organized.<br>
            Copyright © TEDxToronto 2013. All Rights Reserved.<a href="/legal-and-privacy/">Legal &amp; Privacy</a>
          </div>
        </div>
        <div class="col-md-3">
          <a href="https://twitter.com/tedxtoronto" class="twitter-follow-button" data-show-count="false">Follow
                @tedxtoronto</a>
        </div>
        <div class="col-md-5">
          <div class="web-partners">
            <div class="built-by gutter-right gutter-bottom">Built By</div>
            <a class="jc-link gutter-right ir" taget="_blank" href="http://www.jetcooper.com">Jet Cooper</a>
            <a class="twg-link ir" target="_blank" href="http://www.twg.ca">TWG</a>
          </div>
        </div>
      </div>

    </footer>
  </div>
</div>
<?php wp_footer(); ?>

<!-- Compiled JS -->
<script src="<?php echo $template_url; ?>/dist/js/vendor.min.js" type="text/javascript"></script>
<script src="<?php echo $template_url; ?>/dist/js/application.min.js" type="text/javascript"></script>

<!-- Live Reload -->
<?php if(defined('WP_ENV') && WP_ENV !== 'production'): ?>
    <script src="http://0.0.0.0:35729/livereload.js?snipver=1"></script>
<?php endif; ?>

<!-- 3rd Party Embeds -->
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');</script>
</body>
</html>