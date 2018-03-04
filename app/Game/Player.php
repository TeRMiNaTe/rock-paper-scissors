<?php namespace App\Game;

use App\Game\Communicate;

class Player {
	use Communicate;

	/**
	 * The name of the player
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * The hand of the player
	 *
	 * @var \App\Game\Hand;  $hand
	 */
	protected $hand;

	/**
	 * Total amount of points the player has
	 *
	 * @var int
	 */
	protected $points = 0;

	/**
	 * Path to hand classes
	 * @var string
	 */
	private $handPath = 'App\Game\Hands\\';

	/**
	 * Set the name of the player
	 * @param string
	 */
	public function __construct($name) {

		$this->name = $name;
	}

	/**
	 * Assigns a random hand to the player from an array of options
	 * @param  array
	 * @return void
	 */
	public function drawHand(array $hands) {

		$hand = collect($hands)->random();
		$handClassName = $this->handPath.$hand;
		$this->hand = new $handClassName();

		$this->output($this->name.' has: '.$hand);
	}

	/**
	 * Handles round win - increases points
	 * @return void
	 */
	public function winRound() {

		$this->points++;

		$this->output($this->name.' has won this round');
	}

	/**
	 * Outputs a celebratory line
	 * @param  string
	 * @return void
	 */
	public function celebrate($victoryLine) {

		$this->output($this->name.' has won: '.$victoryLine);
	}
	
	/**
	 * Make the properties Read-Only
	 * @param  string
	 * @return mixed
	 */
	public function __get($property) {

		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
}