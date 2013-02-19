<?php


function zeg($string) {
	echo $string;
}

function stort_var($arg) {
	return var_dump($arg);
}

function uitgang($arg = null) {
	return exit($arg);
}

/**
 * Reeks functies
 */

function reeks_sleutels($a) {
	return call_user_func_array('array_keys', array(&$a));
}

function voorelk($a) {
	return call_user_func_array('foreach', array(&$a));
}
