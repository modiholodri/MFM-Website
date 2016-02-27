<?php

$launch_count = @file_get_contents('launch_counter.txt');
$launch_count++;
@file_put_contents('launch_counter.txt', $launch_count);
header('Location: http://movie-file-merger.org/MFMVersionRedirect.xml')

?>