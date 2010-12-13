<?php
/*
    Author : Shaun McCormick
    Link : http://rtfm.modx.com/display/revolution20/Managing+Resources+and+Elements+via+SVN
    Usage : [[!inc? &file=`path/to/file.php`]]
*/
    if (!file_exists($file)) return 'File Not Found !';
    $o = file_get_contents ($file);

    return $o;​