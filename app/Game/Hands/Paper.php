<?php namespace App\Game\Hands;

use App\Game\Hand;

class Paper extends Hand {

	protected $beats = [
		__NAMESPACE__.'\Rock',
		__NAMESPACE__.'\Boulder',
	];
}