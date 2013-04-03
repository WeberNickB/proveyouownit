<?php

class Controller_Users extends Controller_Template
{
	
	public function action_index()
	{
		$user = Auth::get_screen_name(); 
        //$data['todos'] = Model_Todo::find('all', array('where' => array('username' => $user))); 
        $this->template->title = "Profile"; 
        $this->template->content = View::forge('users/index', $data);
		

	}
	public function action_updatePassword()
	{
		$view = View::forge('users/updatePassword');
		$form = Form::forge('update');
		$auth = Auth::instance();
		$form->add('oldpassword', 'Old Password:', array('type' => 'password'));
		$form->add('newpassword', 'New Password:', array('type' => 'password'));
		$form->add('submit', ' ', array('type' => 'submit', 'value' => 'update'));
		if($_POST)
		{
			if($auth->validate_user($auth->get_screen_name(), Input::post('oldpassword')))
			{
				$auth = Auth::instance();
				$auth->change_password(Input::post('oldpassword'),Input::post('newpassword'), null);
				Session::set_flash('success', 'Password has been reset.');
			}
			else
			{
				Session::set_flash('error', 'Old password incorrect.');
			}
		}
		$view->set('form', $form, false);
		$this->template->title = 'Update Password';
		$this->template->content = $view;

	}
	
	
	public function action_login()
	{
		$view = View::forge('users/login');
		$form = Form::forge('login');
		$auth = Auth::instance();
		$form->add('username', 'Username:');
		$form->add('password', 'Password:', array('type' => 'password'));
		$form->add('submit', ' ', array('type' => 'submit', 'value' => 'Login'));
		if($_POST)
		{
			if($auth->login(Input::post('username'), Input::post('password')))
			{
				Session::set_flash('success', 'Successfully logged in! Welcome '.$auth->get_screen_name());
				Response::redirect('item/');
			}
			else
			{
				Session::set_flash('error', 'Username or password incorrect.');
			}
		}
		$view->set('form', $form, false);
		$this->template->title = 'User &raquo; Login';
		$this->template->content = $view;
	}

	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		Session::set_flash('success', 'Logged out.');
		Response::redirect('welcome/');
	}

	public function action_register()
	{
		$auth = Auth::instance();
		$view = View::forge('users/register');
		$form = Fieldset::forge('register');
		Model_User::register($form);
		if($_POST)
		{
			$form->repopulate();
			$result = Model_User::validate_registration($form, $auth);
			if($result['e_found'])
			{
				$view->set('errors', $result['errors'], false);
			}
			else
			{
				Session::set_flash('success', 'User created.');
				Response::redirect('./');
			}
		}
		$view->set('reg', $form->build(), false);
		$this->template->title = 'User &raquo; Register';
		$this->template->content = $view;

	
	}
	

}
