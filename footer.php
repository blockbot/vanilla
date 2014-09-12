        <?php

            if(getenv('APPLICATION_ENV') == 'development'){
                $js_directory = 'js';
            } else {
                $js_directory = 'js-build';
            }

        ?>
        
        <script data-main="<?php bloginfo("template_url"); ?>/library/<?php echo $js_directory; ?>/main" src="<?php bloginfo("template_url"); ?>/library/js/require.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
    </body>
</html>
