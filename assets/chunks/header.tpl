[[setlocale]]<!doctype html>
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
    <meta name="description" content="[[*introtext:notags]]" />
    <meta name="author" content="[[*publishedby:userinfo=`fullname`]]" />
    <meta name="keywords" content="" />
    <base href="[[++site_url]]" />

    <link rel="canonical" href="[[++site_url]][[*id:isnot=`[[++site_start]]`:then=`[[~[[*id]]]]`]]" />

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- CSS : implied media="all" -->
    <link rel="stylesheet" href="[[~ID]]?v=1" />

    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <script src="assets/js/modernizr-1.6.min.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->

    <!--[if lt IE 7 ]>
    <script src="assets/js/dd_belatedpng.js?v=1"></script>
    <![endif]-->

    <!-- DEL ME BEFORE PROD --><meta name="robots" content="noindex" />

    <link rel="alternate" type="application/rss+xml" title="[[++site_name]] RSS Feed" href="[[++site_url]][[~ID]]" />
</head>