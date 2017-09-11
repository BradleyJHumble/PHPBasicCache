<?php
// Cache the contents to a file
$cached = fopen($cachefile, 'w');
fwrite($cached, ob_get_contents());
fclose($cached);
