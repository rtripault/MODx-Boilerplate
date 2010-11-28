
            <div class="infos">
                <noscript>NO JS !! <br /></noscript>
                Dev infos : <br />
                ultimate parent = [[!UltimateParent]] | parent = [[*parent]] | id = [[*id]]<br />
                template = [[*template]]<br />
                <hr />
                Grids : <br />
                Vertical Grid : <a href="javascript:;" onclick="ToggleGrid()"> toggle </a><br />
                Horizontal Grid : <a href="javascript:;" onclick="ToggleHGrid()"> toggle </a><br />
                Both Grid : <a href="javascript:;" onclick="ToggleGrid(); ToggleHGrid()"> toggle </a>
            </div>

<!-- grids -->
            <div id="grid" style="display: none"></div>
            <div id="grid-14-21" style="display: none"></div>

<!-- debug.js -->
<script type="text/javascript">
// define the grid id
var grid = document.getElementById("grid");
var Hgrid = document.getElementById("grid-14-21");
// get the body height in var "bh"
var bh = $('body').height();

// set grids 100% height
    $(grid).css({height:bh});
    $(Hgrid).css({height:bh});
    
    function ToggleGrid() {

        if (grid.style.display == "none") {
            (grid.style.display = "block")
        }

        else {
            (grid.style.display = "none")
        }
    }

    function ToggleHGrid() {

        if (Hgrid.style.display == "none") {
            (Hgrid.style.display = "block")
        }

        else {
            (Hgrid.style.display = "none")
        }
    }
</script>