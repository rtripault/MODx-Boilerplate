  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <!-- allowing to choose library/version ? -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/mylibs/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>

  <!-- scripts concatenated and minified via ant build script-->
    <script src="assets/js/plugins.js?v=1"></script>
    <script src="assets/js/script.js?v=1"></script>
  <!-- end concatenated and minified scripts-->

[[*customJS:notempty=`[[*customJS]]`]]

  <!--[if lt IE 9]>
    <script src="assets/js/mylibs/selectivizr.js"></script>
  <![endif]-->

  <!--[if lt IE 7 ]>
    <script src="assets/js/libs/dd_belatedpng.js?v=1"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

<!--
    <script src="assets/js/profiling/yahoo-profiling.min.js"></script>
    <script src="assets/js/profiling/config.js"></script>

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

    <script>
        (function(){
            var wsc=document.createElement('script');
            wsc.src=document.location.protocol+'//static.woopra.com/js/woopra.js';
            wsc.async=true;
            var ssc = document.getElementsByTagName('script')[0];
            ssc.parentNode.insertBefore(wsc, ssc);
        })();
    </script>

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
-->