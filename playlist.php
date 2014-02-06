<?php
  if (!isset($argv[1])) {
    print("pass the root dir as arg1");
    exit();
  }
  $filter = array("mp3", "m4a", "ogg", "flac", "m4b");
  searchForMusic($argv[1], '', $filter);

  function searchForMusic($search, $relativePath, $filter) {
    if(is_dir($search)) {
      $files = scandir($search);
      foreach($files as $file) {
        if($file != "." && $file != "..") {
          searchForMusic("$search/$file", "$relativePath/$file", $filter);
        }
      }
    } elseif(is_file($search)) {
      if(in_array(strtolower(pathinfo($search, PATHINFO_EXTENSION)), $filter)) {
        print(ltrim($relativePath, '/') . "\r\n");
      }
    }
  }
