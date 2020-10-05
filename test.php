<?php

$directory = './images/';
$i=1;
if ($handle = opendir($directory)) { 
    while (false !== ($fileName = readdir($handle))) {     
        $newName = $i.'.jpg';
        rename($directory . $fileName, $directory . $newName);
    	$i++;
    }
    closedir($handle);
}
?>