<!--
* This program is free software. It comes without any warranty, to
* the extent permitted by applicable law. You can redistribute it
* and/or modify it under the terms of the Do What The Fuck You Want
* To Public License, Version 2, as published by Sam Hocevar. See
* http://www.wtfpl.net/ for more details.
-->

<?php
$file = $_GET['file'];
$filename = $_GET['filename'];
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=".($filename));

echo $file;
echo $filename;
readfile($file);

header('location:/');
