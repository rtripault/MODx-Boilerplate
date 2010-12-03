
            <div class="infos">
                <hr />
                [[%mbp.debuginfos? &topic=`default` &namespace=`modxboilerplate`]]<hr />
                <noscript>NO JS !! <br /></noscript>
                [[%mbp.uparent]][[!UltimateParent]] | [[%mbp.parent]][[*parent]] | [[%mbp.id]][[*id]]<br />
                [[%mbp.tpl]][[*template]]<br />
                [[%mbp.ctx]][[*context_key]] | [[%mbp.lng]][[++cultureKey]]
                <hr />
                [[%mbp.grids]]<hr />
                [[%mbp.vertical-grid]]<a href="javascript:;" onclick="ToggleGrid()">[[%mbp.toggle]]</a><br />
                [[%mbp.horizontal-grid]]<a href="javascript:;" onclick="ToggleHGrid()">[[%mbp.toggle]]</a><br />
                [[%mbp.both-grid]]<a href="javascript:;" onclick="ToggleGrid(); ToggleHGrid()">[[%mbp.toggle]]</a>
            </div>

<!-- grids -->
            <div id="grid" style="display: none"></div>
            <div id="grid-14-21" style="display: none"></div>

<!-- debug.js -->
            <script src="/assets/debug/debug.js"></script>