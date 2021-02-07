<?php

namespace App\Controllers;

class News extends BaseController
{
	public function index()
	{
		$data['page'] = 'News';
		$data['main_content'] = view('news',$data);
		return view('layout',$data);
    }
    
	public function details()
	{
		$data['page'] = 'News Details';
		$data['main_content'] = view('news_details',$data);
		return view('layout',$data);
	}


}
