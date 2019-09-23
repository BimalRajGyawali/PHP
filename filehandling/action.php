<?php

  $filename = "/home/bimal/Documents/C/File/file.c";

  $file = fopen($filename,"r");

  if($file==false)
  {
    echo "File Not Found";
    exit;
  }

  $filesize = filesize($filename);

  $filetext =  fread($file,$filesize);

  fclose($file);

  echo "filesize in bytes $filesize";

  echo "<pre>$filetext</pre>";


 ?>
