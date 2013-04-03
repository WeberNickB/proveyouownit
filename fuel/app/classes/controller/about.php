<?php

class Controller_About extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'About';
		$this->template->content = View::forge('about/index');
	}

}
