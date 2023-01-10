<?php namespace Wecomsrl\Presenter\Contracts;

interface PresentableInterface {

	/**
	 * Prepare a new or cached presenter instance
	 *
	 * @return mixed
	 */
	public function present();

} 
