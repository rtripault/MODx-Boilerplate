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