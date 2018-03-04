<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Game\Game;

class GameIntegrityTest extends TestCase
{
	protected $properties = ['hands', 'hero', 'villain'];

	/**
	 * Make sure the game has the necessary properties
	 *
	 * @return void
	 */
	public function testPropertyExistance()
	{
		$game = new Game();

		foreach ($this->properties as $prop) {
			$this->assertTrue(property_exists($game, $prop));
		}
	}

	/**
	 * Make sure the game's properties have the correct visibility
	 *
	 * @return void
	 */
	public function testPropertyVisibility()
	{
		$game = new Game();

		foreach ($this->properties as $prop) {
			$property = new ReflectionProperty(get_class($game), $prop);

			$this->assertTrue($property->isProtected());
		}
	}
}
