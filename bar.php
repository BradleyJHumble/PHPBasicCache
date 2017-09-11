<?php
// Cache the contents to a file
$cached = fopen($cachefile, 'w');
fwrite($cached, ob_get_contents());
fclose($cached);

ob_end_flush(); // Sends the output to the browser
