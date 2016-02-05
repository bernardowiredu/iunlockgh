<?php

/**
* Controller intiation
*/
class AdminController extends BaseController
{
	

	public function getDashboard(){

		return View::make('admin.dashboard');
	}



	/**/


	public function getAllUsers(){


		$users = User::take(100)->orderBy('created_at', 'DESC')->paginate(15);

		return View::make('admin.users')->with('users',$users);
	}


	public function getMessage(){

		return View::make('admin.messages');
	}
	

	public function getAdminLogin(){

		return View::make('admin.login');
	}

}