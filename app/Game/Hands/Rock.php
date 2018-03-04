<?php namespace App\Game\Hands;

use App\Game\Hand;

class Rock extends Hand {

	protected $beats = [
		__NAMESPACE__.'\Scissors'
	];
}