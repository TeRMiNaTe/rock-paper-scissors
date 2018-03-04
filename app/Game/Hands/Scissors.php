<?php namespace App\Game\Hands;

use App\Game\Hand;

class Scissors extends Hand {

	protected $beats = [
		__NAMESPACE__.'\Paper'
	];
}