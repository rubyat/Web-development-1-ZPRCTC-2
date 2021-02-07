<?php

namespace App\Controllers;
use App\Models\PageM;
use App\Models\ProductM;

class Product extends BaseController
{
	public function index()
	{

		$page = new PageM();
		$product = new ProductM();
		$pages = $page->findAll();

		$data['page'] = 'Product';
		$data['product_text'] = $pages[1];
        $data['products'] = $product->findAll();
		$data['main_content'] = view('product',$data);
		return view('layout',$data);
    }
    
	public function details($product_id)
	{
		$product = new ProductM();
		$data['page'] = 'Product Details';
		$data['product'] = $product->where('product_id',$product_id)->first();
		$data['main_content'] = view('product_details',$data);
		return view('layout',$data);
	}


}
