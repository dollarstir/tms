<?php

function changeext($directory, $ext1, $ext2, $verbose = false) {
  $num = 0;
  if($curdir = opendir($directory)) {
   while($file = readdir($curdir)) {
     if($file != '.' && $file != '..') {

       $srcfile = $directory . '/' . $file;
       $string  = "$file";
    //    $string =  chmod($string, 777);
       $str     = strlen($ext1);
       $str++;
       $newfile = substr($string, 0, -$str);
       $newfile = $newfile.'.'.$ext2;
       $dstfile = $directory . '/' . $newfile;

       if (mb_eregi("\.$ext1",$file)) { # Look at only files with a pre-defined extension
       $fileHand = fopen($srcfile, 'r');
       fclose($fileHand);
       rename($srcfile, $dstfile );
       }

       if(is_dir($srcfile)) {
         $num += changeext($srcfile, $ext1, $ext2, $verbose);
       }
     }
   }
   closedir($curdir);
  }
  return $num;
}

echo $dir = getcwd();
changeext($dir, 'html', 'php',  'false');

?>