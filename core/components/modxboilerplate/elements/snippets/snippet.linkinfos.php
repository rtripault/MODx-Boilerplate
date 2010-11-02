<?php
if ( !isset($format) || $format == "" ) return "No format selected";
    $u = $_SERVER['REQUEST_URI'];
    $prot = substr($_SERVER['SERVER_PROTOCOL'],0,strpos('/',$_SERVER['SERVER_PROTOCOL']));
    $p = $_SERVER['SERVER_PORT'];
    $h = $_SERVER['HTTP_HOST'];
    $_l = strtolower($prot).'://'.$h.':'.$p.$u;
    $l = 'http://'.$h.$u;
if ($format=="url") {
    $o = $l;
    return $o;
}
elseif ($format=="uri") {
    $o = str_replace($u, "/", $u);
    return $o;
}
else {
    $o = "Error";
    return $o;
}​