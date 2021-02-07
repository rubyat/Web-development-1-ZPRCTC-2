<?php


namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\ProductM;


class Product extends BaseController
{
	public function index()
	{


        $data['page'] = 'Product';
        $model = new ProductM();
        $data['products'] = $model->findAll();
		$data['main_content'] = view('admin/product/list',$data);
		return view('admin/layout',$data);
    }

	public function add()
	{

        $data['page'] = 'Product Add';
        $data['product'] = false;
        $data['product_id'] = false;
		$data['main_content'] = view('admin/product/form',$data);
		return view('admin/layout',$data);
    }

	public function edit($product_id)
	{

        $model = new ProductM();
		$data['page'] = 'Product Add';
        $data['product_id'] = $product_id;
        $data['product'] = $model->where('product_id',$product_id)->first();

		$data['main_content'] = view('admin/product/form',$data);
		return view('admin/layout',$data);
    }

	public function operation($product_id = false)
	{

        if($_POST){


            $model = new ProductM();

            $sData['title'] =  $_POST['title'];
            $sData['details'] =  $_POST['details'];
            
            if($_FILES['image']['name']){

                $img = $this->request->getFile('image');
                $imageName = $img->getRandomName();
                $img->move('uploads/img',$imageName);
                $sData['image'] = 'uploads/img/' . $imageName;

            } 
            
            if($_FILES['icon']['name']){

                $img = $this->request->getFile('icon');
                $imageName = $img->getRandomName();
                $img->move('uploads/img',$imageName);
                $sData['icon'] = 'uploads/img/' . $imageName;
            } 
            

			if($product_id){
				$model->update($product_id,$sData);
			}else{
				$model->insert($sData);
			}
			return redirect()->to(base_url('admin/product'));


        }
		
    }


    public function delete($product_id){

        $model = new ProductM();
        $model->delete($product_id);
        return redirect()->to(base_url('admin/product'));

    }


    



}
