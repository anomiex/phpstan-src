<?php

function (): void {
	create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');
};
