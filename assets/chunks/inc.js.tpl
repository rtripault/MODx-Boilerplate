  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <!-- allowing to choose library/version ? -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/libs/jquery-1.4.3.js"%3E%3C/script%3E'))</script>

  <!-- scripts concatenated and minified via ant build script-->
    <script src="assets/js/plugins.js?v=1"></script>
    <script src="assets/js/script.js?v=1"></script>
  <!-- end concatenated and minified scripts-->

  <!-- JS for actual resource if needed -->[[*customJS:notempty=`
[[*customJS]]`]]

  <!-- enhancing CSS Selectors for IE < 9 // should be activable/desactivable -->
  <!--[if lt IE 9]>
    <script src="assets/js/selectivizr.js"></script>
  <![endif]-->

  <!-- should be activable/desactivable -->
  <!--[if lt IE 7 ]>
    <script src="assets/js/libs/dd_belatedpng.js?v=1"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

  <!-- allowing usage of profiling tools if in dev // should be optionnal (in dev but not using it) > system setting -->
[[++admin.prod:is=`1`:then=`
  <!-- yui profiler and profileviewer - remove for production -->
    <script src="js/profiling/yahoo-profiling.min.js"></script>
    <script src="js/profiling/config.js"></script>
  <!-- end profiling code -->
`]]

[[++admin.ga:is=`1`:then=`
  <!-- Google Analytics stuff if enabled in settings -->
    <script>
        var _gaq = [['_setAccount', '[[++gaUA]]'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.async = true;
            g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s);
        })(document, 'script');
    </script>
`]]

  <!-- using Woopra if enabled in settings -->
[[++admin.woopra:is=`1`:then=`
    <script>
        (function(){
            var wsc=document.createElement('script');
            wsc.src=document.location.protocol+'//static.woopra.com/js/woopra.js';
            wsc.async=true;
            var ssc = document.getElementsByTagName('script')[0];
            ssc.parentNode.insertBefore(wsc, ssc);
        })();
    </script>
`]]

  <!-- using Piwik if enabled in settings // should allow local install -->
[[++admin.piwik:is=`1`:then=`
    <script>
        var pkBaseURL='[[++admin.piwikURL]]';
        document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js'%3E%3C/script%3E"));
    </script>
    <script>
        try {
            var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", [[++admin.piwikID]]);
            piwikTracker.trackPageView();
            piwikTracker.enableLinkTracking();
        } catch( err ) {}
    </script>
    <noscript><p><img src="[[++admin.piwikURL]]piwik.php?idsite=[[++admin.piwikID]]" style="border:0" alt="" /></p></noscript>
`]]