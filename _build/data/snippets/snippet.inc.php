<?php
if (!file_exists($file)) return 'File Not Found !';
$o = file_get_contents ($file);

return $o;​