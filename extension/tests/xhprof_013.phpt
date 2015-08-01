--TEST--
XHProf: Test loading but not using extension
Author: Xuavis
--FILE--
<?php

include_once dirname(__FILE__).'/common.php';

var_dump(function_exists('xhprof_enable'));
?>
--EXPECT--
bool(true)
