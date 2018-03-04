<?php namespace App\Game;

use App\Game\Communicate;

class Game
{
	use Communicate;

	// protected $hands = ['Rock', 'Paper', 'Scissors'];
	protected $hands = ['Boulder', 'Paper', 'Scissors'];

	protected $hero;
	protected $villain;

	public function __construct() {

		$this->hero = new Player('Hero');
		$this->villain = new Player('Villain');

		// Clear any output from the previous game
		$this->clearOutput();
	}

	public function play($count = 3) {

		$this->playRounds($count);

		$this->winner();
	}

	protected function playRounds($count = 3) {

		for ($i=0; $i < $count; $i++) { 
			$this->playRound();
		}
	}

	protected function playRound() {

		$this->hero->drawHand($this->hands);
		$this->villain->drawHand($this->hands);

		$this->compareHands();
	}

	protected function compareHands() {

		// Hero wins
		if ($this->hero->hand->beats($this->villain->hand)) {
			$this->hero->winRound();
		// Villain wins
		} else if ($this->villain->hand->beats($this->hero->hand)) {
			$this->villain->winRound();
		// Draw - replay round
		} else {
			$this->output('Round Restart');
			$this->playRound();
		}
	}

	protected function winner() {

		$this->output('Game over!');

		// Hero win
		if ($this->hero->points > $this->villain->points) {
			$this->hero->celebrate('I knew justice would prevail in the end!');
		// Villain win
		} else if ($this->villain->points > $this->hero->points) {
			$this->villain->celebrate('There is no stopping me now!');
		// Draw
		} else {
			$this->output('Draw: Everyone\'s a winner!');
		}
	}
}
