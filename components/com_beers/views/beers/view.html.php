<?php

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView;

class BeersViewBeers extends HtmlView
{
	/**
	 * @var    string  The name of the extension for the category
	 * @since  3.2
	 */
	protected $extension = 'com_beers';

	public function display()
	{
		$this->items      = $this->get('Items');
		$this->message    = "Below a list consisting of several beers. If you like them, give them a rating!";
		$this->pagination = $this->get('Pagination');

		parent::display();
	}
}
