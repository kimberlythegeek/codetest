<?php

/**
 * getEquilibriums is a function that calculates the Equilibrium Index of an array.
 *
 * The Equilibrium Index of an array is an index such that the sum of the 
 * elements at lower indices is equal to the sum of elements at higher indices.
 *
 * @param array $arr Array on which to calculate Equilibrium Indices
 *
 * @return array
 */
function getEquilibriums($arr) {
	# Array of Equilibrium Indices
	$output = array();

	for($i = 1; $i < sizeof($arr); $i++) {
		# If iterator is equal to length of array,
		if($i == sizeof($arr) - 1) {
			# and the sum of the elements equals zero,
			if(array_sum($arr) == 0) {
				# then i is an Equilibrium Index.
				array_push($output, $i);
			}
		}
		# If not at the end of the array,
		else {
			# create new array of elements Before index,
			$first = array_slice($arr, 0, $i);
			# and create new array of elements After index.
			$second = array_slice($arr, $i + 1);
			# If the sums of the elements of the arrays or equal,
			if(array_sum($first) == array_sum($second)) {
				# then i is an Equilibrium Index.
				array_push($output, $i);
			}
		}
	}
	return $output;
}
 
