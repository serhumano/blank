<?php
header("Content-type: application/javascript");
///////////////////////////////////////////
// efficient JS minification using PHP
// http://verens.com/2008/05/20/efficient-js-minification-using-php/
///////////////////////////////////////////
  $js=file_get_contents('js/scripts.js');
  // $js.=file_get_contents('jquery.dimensions.pack.js');
  // $js.=file_get_contents('jquery.impromptu.js');
  // $js.=file_get_contents('jquery.iutil.pack.js');
  // $js.=file_get_contents('jquery.idrag.js');
  // $js.=file_get_contents('jquery.grid.columnSizing.js');
  require 'php/jsmin.php';
  $js=JSMin::minify($js);
  echo $js;
?>