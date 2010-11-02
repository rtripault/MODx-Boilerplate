<!-- inc.header.tpl (chunk) -->
[[!inc?file=`[[++assets_path]]chunks/inc.head.tpl`]]

<body>
<!-- inc.header.tpl (chunk) -->
[[!inc?file=`[[++assets_path]]chunks/inc.header.tpl`]]


<!-- inc.nav.tpl (chunk) -->
[[!inc?file=`[[++assets_path]]chunks/inc.nav.tpl`]]


<!-- main content -->
    <div class="mc" role="main">[[*contentBefore:notempty=`
[[*contentbefore]]`]]
        <article id="main">
[[*content]]
        </article>[[*contentAfter:notempty=`
[[*contentAfter]]`]]
    </div>
<!-- /main content -->


<!-- inc.aside.tpl (chunk) -->
[[++admin.aside:is=`1`:then=`[[!inc?file=`[[++assets_path]]chunks/inc.aside.tpl`]]`]]

<!-- inc.footer.tpl (chunk) -->
[[!inc?file=`[[++assets_path]]chunks/inc.footer.tpl`]]

<!-- inc.js.tpl (chunk) -->
[[!inc?file=`[[++assets_path]]chunks/inc.js.tpl`]]
</body>
</html>
[[++admin.prod:is=`1`:then=`[[!inc?file=`[[++assets_path]]chunks/inc.perf.tpl`]]`]]