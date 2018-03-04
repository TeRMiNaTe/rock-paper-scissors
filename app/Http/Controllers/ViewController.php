<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Game\Game;

class ViewController extends Controller {

	public function app(Request $request)
	{

		$game = new Game();

		$game->play();

		$output = $game->getOutput();

		return view('rock_paper_scissors', [
			'output'	=> $output,
		]);
	}

}