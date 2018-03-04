<?php namespace App\Game;

trait Communicate
{
	/**
	 * Name of session variable where all output will be stored
	 * @var string
	 */
	protected $sessionStore = 'gameOutput';

	protected function output($line) {

		// echo $line.'<br />';
		if (!session()->has($this->sessionStore)) {
			session()->put($this->sessionStore, []);
		}

		$output = session($this->sessionStore);

		$output[] = $line;

		session()->put($this->sessionStore, $output);
	}

	protected function clearOutput() {

		session()->forget($this->sessionStore);
	}

	public function getOutput() {
		
		return session($this->sessionStore);
	}
}