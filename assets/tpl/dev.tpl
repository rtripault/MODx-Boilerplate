<!-- header.tpl (chunk) -->
<!-- setting locales for some PHP functions (like strftime) to display correctly in languages != en -->[[setlocale]] <!-- shouldn't this be a plugin ? -->
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6 no-js" lang="[[++cultureKey]]"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7 no-js" lang="[[++cultureKey]]"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 no-js" lang="[[++cultureKey]]"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9 no-js" lang="[[++cultureKey]]"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="[[++cultureKey]]">
<!--<![endif]-->
<head>
    <meta charset="[[++modx_charset:lcase]]" />

  <!--[if IE] >< ![endif]-->
    <title>[[*longtitle:ifempty=`[[*pagetitle]]`]]</title>
    <meta name="description" content="[[*description:notags]]" />
    <meta name="author" content="[[*publishedby:userinfo=`fullname`]]" />
    <meta name="keywords" content="" /><!-- define a TV for keywords, check MetaX 1.3 Extra -->
    <base href="[[++site_url]]" />

    <link rel="canonical" href="[[++site_url]][[*id:isnot=`[[++site_start]]`:then=`[[~[[*id]]]]`]]" /><!-- check Bobray's Canonical package -->

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

  <!-- CSS : implied media="all" // define your master CSS resource ID in config; TODO: a way to increment ?v=? -->
    <link rel="stylesheet" href="[[~[[++admin.css]]]]?v=1" />
  <!-- Allowing to add one or more custom CSS -->
[[*customCSS:notempty=`[[*customCSS]]`]]

[[++admin.cssHandled:notempty=`<!-- handled.css comes here -->`]]

[[++admin.cssPrint:notempty=`<!-- print.css comes here -->`]]

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <script src="assets/js/modernizr-1.6.min.js"></script>

[[++admin.prod:is=`1`:then=`    <meta name="robots" content="noindex" />`]]

  <!-- main RSS Feed // define your RSS resource ID in config -->
    <link rel="alternate" type="application/rss+xml" title="[[++site_name]] RSS Feed" href="[[++site_url]][[~[[++admin.rss]]]]" />
  <!-- adding one ore more custom RSS Feeds -->
[[*customRSS:notempty=`[[*customRSS]]`]]
</head>
<!-- /header.tpl (chunk) -->



<body>


<!-- headNav.tpl (chunk) -->
    <header role="banner">
        <hgroup>
            <h1 id="siteName"><a href="[[++site_url]]">[[++site_name]]</a></h1>
[[++admin.tagLine:notempty=`
            <h2>[[++admin.tagLine]]</h2>
`]]
        </hgroup>

        <nav role="navigation">
<!-- display all wayfinder properties for sharing knowledge -->
[[!WayFinder?
    &titleOfLinks=`pagetitle`
    &textOfLinks=`menutitle`
    &startId=`0`
    &_level=`1`
    &_hideSubMenus=`1`
    &_outerTpl=`outNav`
    &_rowTpl=`rowNav`
    &_debug=`1`
]]
        </nav>
    </header>
<!-- /headNav.tpl (chunk) -->


<!-- main content -->
    <div class="mc" role="main">
        <article id="main">
[[*content]]
        </article>
<!-- setting a TV to define some custom content (snippet calls…) // Adding a custom content before *content ? -->
[[*customContent:notempty=`[[*customContent]]`]]
    </div>
<!-- /main content -->


<!-- use an aside if defined in config -->
[[++admin.aside:is=`1`:then=`
<!-- aside.tpl (chunk) -->
    <aside role="complementary">
        <!-- some TV system to set what "widgets" go here -->
    </aside>
<!-- /aside.tpl (chunk) -->
`]]


<!-- footer.tpl (chunk) -->
    <footer id="footer">
        <!-- add all If paremeters // use a TV/system setting for first "online" date -->
        <p>&copy; 2010[[If?
            &subject=`[[now:date=`%Y`]]`
            &operator=`>`
            &operand=`2010`
            &then=`-[[now:date=`%Y`]]`
            &else=``]]<!--if current year > 2010 then display "-current year"--> [[++site_name]]</p>
    </footer>
<!-- /footer.tpl (chunk) -->


<!-- js.tpl (chunk) -->
  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <!-- allowing to choose library/version ? -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/libs/jquery-1.4.3.js"%3E%3C/script%3E'))</script>

  <!-- scripts concatenated and minified via ant build script-->
    <script src="assets/js/plugins.js?v=1"></script>
    <script src="assets/js/script.js?v=1"></script>
  <!-- end concatenated and minified scripts-->

  <!-- JS for actual resource if needed -->
[[*customJS:notempty=`[[*customJS]]`]]

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
<!-- /js.tpl (chunk) -->


</body>
</html>


<!-- perf.tpl (chunk) -->
[[++admin.prod:is=`1`:then=`
<!--///////////////////////////////////////////////
////    MySQL: [^qt^], [^q^] request(s)
////    PHP: [^p^], total: [^t^]
////    document retrieved from [^s^]
///////////////////////////////////////////////-->
`]]
<!-- /perf.tpl (chunk) -->