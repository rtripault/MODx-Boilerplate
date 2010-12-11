[[inc?file=`[[++assets_path]]chunks/inc.head.tpl`]]
<body>
[[inc?file=`[[++assets_path]]chunks/inc.header.tpl`]]
[[inc?file=`[[++assets_path]]chunks/inc.nav.tpl`]]

<!-- content -->
    <div class="mc" role="main">[[*contentBefore:notempty=`
[[*contentbefore]]`]]
        <article id="main">
[[*content]][[*contentAfter:notempty=`
[[*contentAfter]]`]]
        </article>

[[inc?file=`[[++assets_path]]chunks/inc.aside.tpl`]]
[[inc?file=`[[++assets_path]]chunks/inc.footer.tpl`]]
    </div>
<!-- /content -->

[[inc?file=`[[++assets_path]]chunks/inc.js.tpl`]]
<!--[[!++mbp.dev:is=`1`:then=`[[inc?file=`[[++assets_path]]debug/debug.tpl`]]`:else=``]]-->
[[inc?file=`[[++assets_path]]debug/debug.tpl`]]
</body>
</html>
<!--[[!++mbp.dev:is=`1`:then=`[[inc?file=`[[++assets_path]]chunks/inc.perf.tpl`]]`]]-->
[[inc?file=`[[++assets_path]]chunks/inc.perf.tpl`]]