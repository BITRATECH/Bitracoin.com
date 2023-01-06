<?php

$dir = "../../v1/api/";
$files_to_show = array("price.php", "totalSupply.php", "circulatingSupply.php");
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if (in_array($file, $files_to_show)) {
        // sadece belirli dosyaları göster
        echo "apiName: " . $file . "<br>";
      }
    }
    closedir($dh);
  }
}
