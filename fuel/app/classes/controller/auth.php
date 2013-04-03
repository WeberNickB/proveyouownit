<?php
class Controller_Auth extends \NinjAuth\Controller {
    public static $linked_redirect = '/auth/linked';
    public static $login_redirect = '/';
    public static $register_redirect = '/auth/register';
    public static $registered_redirect = '/auth/registered';

    /*
    *   Example registered action for SimpleAuth (Should work with others)
    *
    */
    public function action_registered(){

        $auth = Auth::instance();
        $user_id = Session::get_flash('ninjauth.user_id');

        if(isset($user_id)){
            Auth::instance()->force_login($user_id);
            return Response::redirect('/dashboard');
        }

        return $this->response;
    }
}
