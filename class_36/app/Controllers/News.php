<?php

namespace App\Controllers;
use App\Models\NewsM;
use App\Models\PageM;

class News extends BaseController
{
	public function index()
	{
		$news = new NewsM();
		$page = new PageM();
		$pages = $page->findAll();


		$data['page'] = 'News';
		$data['newss'] = $news->findAll();
		$data['news_text'] = $pages[3];
		$data['main_content'] = view('news',$data);
		return view('layout',$data);
    }
    
	public function details($news_id)
	{
		$news = new NewsM();
		$data['page'] = 'News Details';
		$data['news'] = $news->where('news_id',$news_id)->first();
		$data['main_content'] = view('news_details',$data);
		return view('layout',$data);
	}


}
