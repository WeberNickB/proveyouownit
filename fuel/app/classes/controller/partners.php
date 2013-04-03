<?php

class Controller_Partners extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Partners';
		$this->template->content = View::forge('partners/index');
	}

}
