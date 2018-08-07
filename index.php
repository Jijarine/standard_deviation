<?php

/**
 * Copyright (c) Cole Design Stuidos, LLC (https://coleds.com)
 * 
 * Licensed under The MIT License
 *
 * @copyright     Copyright (c) Cole Design Studios, LLC. (https://coleds.com)
 * @link          https://github.com/Jijarine/standard_deviation
 * @since         v0.0.1
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * calculate the standard deviation of an array of elements
 * 
 * 
 * @return float
 */
function standDeviation(array $array = []) {
	$numOfElements = count($array);
	$variance = 0.0;
	$average = (array_sum($array) / $num_of_elements);

	foreach($array as $i) {
		/* sum of squares of differences between all numbers and means. */
		$variance += pow(($i - $average), 2);
	}

	return (float)sqrt($variance / $num_of_elements);
}

?>