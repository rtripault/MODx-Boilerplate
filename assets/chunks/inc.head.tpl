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
[[!MetaX?
    &html=`0`
    &tabs=`0`
    &language=`[[++cultureKey]]`
    &keywords=`mykeys`
    &allkeywords=`allkeys`
    &abstract=`description`
    &favicon=`path/icon1.ico`
    &mobile=`path/mob.png`
    &author=`Sal S.`
    &copyholder=`Sal S.`
    &copyfrom=`2007`
    &copytill=`2013`
    &ietool=`0`
    &rss=`rss1.xml,rss2.xml`
    &css=`c1.css,c2.css:lt IE 7`
    
    &dublin=`0`
    &dccontributor=``
    &dccoverage=``
    &dccreator=``
    &dcdate=``
    &dcpublisher=``
    &dcrelation=``
    &dcsource=``
    &dctitle=``
    &dctype=``
]]
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