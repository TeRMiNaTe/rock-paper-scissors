<?php namespace App\Game;

abstract class Hand {

	protected $beats;

	final public function beats(Hand $hand) {

		foreach ($this->beats as $opponent) {
			if ($hand instanceof $opponent) {
				return true;
			}
		}

		return false;
	}
}