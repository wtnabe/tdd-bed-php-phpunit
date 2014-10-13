<?php
$src_dir = __DIR__.'/../src';
function ___files($dir) {
  $files = glob("{$dir}/*.php");

  $dirs  = glob("{$dir}/*", GLOB_ONLYDIR);
  foreach ($dirs as $dir) {
    $files = array_merge($files, ___files($dir));
  }

  return $files;
}
foreach ( ___files($src_dir) as $file ) { require_once($file); }
