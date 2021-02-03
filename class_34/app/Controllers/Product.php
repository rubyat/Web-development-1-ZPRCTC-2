<?php

namespace App\Controllers;

class Product extends BaseController
{
	public function index()
	{
		$data['page'] = 'Product';
		$data['main_content'] = view('product',$data);
		return view('layout',$data);
    }
    
	public function details()
	{
		$data['page'] = 'Product Details';
		$data['main_content'] = view('product_details',$data);
		return view('layout',$data);
	}


}
