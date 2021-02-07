<?php

namespace App\Controllers;
use App\Models\NewsM;
use App\Models\PageM;
use App\Models\SliderM;
use App\Models\ProductM;

class Home extends BaseController
{
	public function index()
	{

		$news = new NewsM();
		$page = new PageM();
		$slider = new SliderM();
		$product = new ProductM();

		$data['page'] = 'Home';
        $data['newss'] = $news->findAll();
        $data['pages'] = $page->findAll();
        $data['sliders'] = $slider->findAll();
        $data['products'] = $product->findAll();

		$data['main_content'] = view('home',$data);
		return view('layout',$data);
	}


}
