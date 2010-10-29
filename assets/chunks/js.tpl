    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script>!window.jQuery && document.write('<script src="assets/js/jquery-1.4.3.min.js"><\/script>')</script>

    <script src="js/plugins.js?v=1"></script>
    <script src="js/script.js?v=1"></script>

    <script>
        //var _gaq = [['_setAccount', 'UA-19345886-1'], ['_setDomainName', 'none'], ['_setAllowLinker', true], ['_trackPageview']];
        var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-19345886-1']);
            _gaq.push(['_setDomainName', 'none']);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']);
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
        var pkBaseURL='//stats.meltingmedia.net/';
        document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js'%3E%3C/script%3E"));
    </script>
    <script>
        try {
            var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 12);
            piwikTracker.trackPageView();
            piwikTracker.enableLinkTracking();
        } catch( err ) {}
    </script>
    <noscript><p><img src="http://stats.meltingmedia.net/piwik.php?idsite=12" style="border:0" alt="" /></p></noscript>