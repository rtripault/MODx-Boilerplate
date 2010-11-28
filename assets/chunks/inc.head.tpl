[[++cultureKey:is=`fr`:then=`[[setlocale]]`:else=``]]<!doctype html>
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
    <meta name="keywords" content="[[*metaTags]]" />
    <base href="[[++site_url]]" />
    [[Canonical]]

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

  <!-- CSS : implied media="all" // define your master CSS resource ID in config; TODO: a way to increment ?v=? -->
    <!--<link rel="stylesheet" href="[[~[[++admin.css]]]]?v=1" />-->
    <link rel="stylesheet" href="[[~25]]?v=1" />
[[*customCSS:notempty=`[[*customCSS]]`]]
[[++admin.cssHandled:notempty=`<!-- handled.css comes here -->`]]
[[++admin.cssPrint:notempty=`<!-- print.css comes here -->`]]
    <script src="assets/js/libs/modernizr-1.6.min.js"></script>
    <link rel="alternate" type="application/rss+xml" title="[[++site_name]] RSS Feed" href="[[++site_url]][[~[[++admin.rss]]]]" />
[[*customRSS:notempty=`[[*customRSS]]`]]

    <meta name="robots" content="noindex" />
</head>