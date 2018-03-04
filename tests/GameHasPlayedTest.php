<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GameHasPlayedTest extends TestCase
{
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGameHasPlayed()
	{
		$this->visit('/')
				// Make sure the page is accessible
			 ->assertResponseOk()
			 	// Make sure the view has some output
			 ->assertViewHas('output')
			 	// Make sure at least 1 round has been played
			 ->see('has won this round')
			 	// Make sure the game ended
			 ->see('Game Over');
	}
}
