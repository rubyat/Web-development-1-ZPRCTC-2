<?php


namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PageM;


class Page extends BaseController
{
	public function index()
	{


        $data['page'] = 'Page';
        $model = new PageM();
        $data['pages'] = $model->findAll();
		$data['main_content'] = view('admin/page/list',$data);
		return view('admin/layout',$data);
    }

	public function add()
	{

        $data['page'] = 'Page Add';
        $data['page'] = false;
        $data['page_id'] = false;
		$data['main_content'] = view('admin/page/form',$data);
		return view('admin/layout',$data);
    }

	public function edit($page_id)
	{

        $model = new PageM();
		$data['page'] = 'Page Add';
        $data['page_id'] = $page_id;
        $data['page'] = $model->where('page_id',$page_id)->first();

		$data['main_content'] = view('admin/page/form',$data);
		return view('admin/layout',$data);
    }

	public function operation($page_id = false)
	{

        if($_POST){


            $model = new PageM();

            $sData['title'] =  $_POST['title'];
            $sData['details'] =  $_POST['details'];
            
            if($_FILES['image']['name']){

                $img = $this->request->getFile('image');
                $imageName = $img->getRandomName();
                $img->move('uploads/img',$imageName);
                $sData['image'] = 'uploads/img/' . $imageName;

            } 
            
            

			if($page_id){
				$model->update($page_id,$sData);
			}else{
				$model->insert($sData);
			}
			return redirect()->to(base_url('admin/page'));


        }
		
    }


    public function delete($page_id){

        $model = new PageM();
        $model->delete($page_id);
        return redirect()->to(base_url('admin/page'));

    }


    



}
