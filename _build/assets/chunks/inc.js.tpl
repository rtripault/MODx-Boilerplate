  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <!-- allowing to choose library/version ? -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/assets/js/mylibs/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>

  <!-- scripts concatenated and minified via ant build script-->
    <script src="/assets/js/plugins.js?v=1"></script>
    <script src="/assets/js/script.js?v=1"></script>
  <!-- end concatenated and minified scripts-->

[[*customJS:notempty=`[[*customJS]]`]]
[[!++mbp.selectivzr:is=`1`:then=`
<!--[if lt IE 9]>
<script src="/assets/js/mylibs/selectivizr.js"></script>
<![endif]-->`:else=``]]
[[!++mbp.pngfix:is=`1`:then=`<!--[if lt IE 7 ]>
<script src="/assets/js/libs/dd_belatedpng.js?v=1"></script>
<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->`:else=``]]
[[!++mbp.profiling:is=`1`:then=`<script src="/assets/js/profiling/yahoo-profiling.min.js"></script>
<script src="/assets/js/profiling/config.js"></script>`:else=``]]
[[!++mbp.google_analytics:is=`1`:then=`
<!--<script>
    var _gaq = [['_setAccount', '[[!++mbp.google_analytics_ua]]'], ['_trackPageview']];
    (function(d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.async = true;
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s);
    })(document, 'script');
</script>-->
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '[[!++mbp.google_analytics_ua]]']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>`:else=``]]
[[!++mbp.woopra:is=`1`:then=`<script>
    (function(){
        var wsc=document.createElement('script');
        wsc.src=document.location.protocol+'//static.woopra.com/js/woopra.js';
        wsc.async=true;
        var ssc = document.getElementsByTagName('script')[0];
        ssc.parentNode.insertBefore(wsc, ssc);
    })();
</script>`:else=``]]
[[!++mbp.piwik:is=`1`:then=`<script src="[[++mbp.piwik_url]]piwik.js"></script>
<script>
    try {
        var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", [[++mbp.piwik_id]]);
        piwikTracker.trackPageView();
        piwikTracker.enableLinkTracking();
    } catch( err ) {}
</script>
<noscript><p><img src="[[++mbp.piwik_url]]piwik.php?idsite=[[++mbp.piwik_id]]" style="border:0" alt="" /></p></noscript>`:else=``]]