<?php

function swap_vars(&$var1,&$var2) {
	list($var1, $var2) = array($var2, $var1);
}