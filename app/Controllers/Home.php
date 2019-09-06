<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function coba()
	{
		return view("upload/upload", ['url' => base_url()]);
	
	}

	//--------------------------------------------------------------------

}
