<?php namespace App\Game\Hands;

use App\Game\Hand;

class Boulder extends Hand {

	protected $beats = [
		__NAMESPACE__.'\Scissors'
	];
}