<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['page'] = 'Home';
		$data['main_content'] = view('home',$data);
		return view('layout',$data);
	}


}
